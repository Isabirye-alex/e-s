<?php
class User {
    public int $id;
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $user_type;

    public string $status;

    private $pdo;

    public function __construct($id, $firstname, $lastname, $email, $password, $user_type, $pdo, $status)
    {
        $this->pdo = $pdo;
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->status = $status;
        $this->password = $password;
        $this->user_type = $user_type;
    }

    public function registerUser($pdo): array
    {
        // Validation
        $required_fields = ['firstname', 'lastname', 'email', 'password', 'user_type', 'status'];
        foreach ($required_fields as $field) {
            if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
                return [
                    'status' => 'error',
                    'message' => ucfirst($field) . ' is required',
                    'id' => null
                ];
            }
        }

        // Email validation
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            return [
                'status' => 'error',
                'message' => 'Invalid email format',
                'id' => null
            ];
        }

        // Password validation
        if (strlen($_POST['password']) < 6) {
            return [
                'status' => 'error',
                'message' => 'Password must be at least 6 characters',
                'id' => null
            ];
        }

        try {
            // Check for duplicate email
            $checkStmt = $pdo->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
            $checkStmt->execute(['email' => $_POST['email']]);
            if ($checkStmt->fetch()) {
                return [
                    'status' => 'error',
                    'message' => 'Email is already registered',
                    'id' => null
                ];
            }

            // Prepare fields
            $fields = [
                'firstname' => $this->firstname,
                'lastname'  => $this->lastname,
                'email'     => $this->email,
                'password'  => password_hash($this->password, PASSWORD_BCRYPT, ['cost'=>20]), // hash password
                'user_type' => $this->user_type,
                'status'    => $this->status
            ];

            $columns = implode(', ', array_keys($fields));
            $placeholders = ':' . implode(', :', array_keys($fields));

            $sql = "INSERT INTO users ($columns) VALUES ($placeholders)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute($fields);

            return [
                'status'  => 'success',
                'message' => 'User registered successfully',
                'id'      => $pdo->lastInsertId()
            ];
        } catch (PDOException $e) {
            return [
                'status'  => 'error',
                'message' => 'Database error: ' . $e->getMessage(),
                'id'      => null
            ];
        }
    }

    public function loginUser($pdo): array
    {
        // Validation
        $required_fields = ['email', 'password'];
        foreach ($required_fields as $field) {
            if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
                return [
                    'status' => 'error',
                    'message' => ucfirst($field) . ' is required',
                    'id' => null
                ];
            }
        }

        try {
            // Fetch user by email
            $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['email' => $this->email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$user) {
                return [
                    'status' => 'error',
                    'message' => 'Invalid email or password',
                    'id' => null
                ];
            }

            // Verify password
            if (!password_verify($this->password, $user['password'])) {
                return [
                    'status' => 'error',
                    'message' => 'Invalid email or password',
                    'id' => null
                ];
            }

            //Login success
            return [
                'status'  => 'success',
                'message' => 'User logged in successfully',
                'id'      => $user['id'],    // return the actual user ID
                'user'    => [
                    'firstname' => $user['firstname'],
                    'lastname'  => $user['lastname'],
                    'email'     => $user['email'],
                    'user_type' => $user['user_type'],
                    'status'    => $user['status']
                ]
            ];

        } catch (PDOException $e) {
            return [
                'status' => 'error',
                'message' => 'Database error: ' . $e->getMessage(),
                'id' => null
            ];
        }
    }

}
