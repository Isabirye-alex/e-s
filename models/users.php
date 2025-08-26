<?php
class User {
    public int $id;
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $user_type;
    public string $status;

    private PDO $pdo;

    // Constructor accepts PDO and all user fields
    public function __construct($pdo, int $id = 0, string $firstname = '', string $lastname = '', string $email = '', string $password = '', string $user_type = '', string $status = '')
    {
        $this->pdo = $pdo;
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->user_type = $user_type;
        $this->status = $status;
    }

    // ---------------- Registration ----------------
    public function registerUser(): array
    {
        // Validation
        $required_fields = ['firstname', 'lastname', 'email', 'password', 'user_type', 'status'];
        foreach ($required_fields as $field) {
            if (empty(trim($this->{$field}))) {
                return [
                    'status' => 'error',
                    'message' => ucfirst($field) . ' is required',
                    'id' => null
                ];
            }
        }

        // Email format validation
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return [
                'status' => 'error',
                'message' => 'Invalid email format',
                'id' => null
            ];
        }

        // Password length check
        if (strlen($this->password) < 6) {
            return [
                'status' => 'error',
                'message' => 'Password must be at least 6 characters',
                'id' => null
            ];
        }

        try {
            // Check duplicate email
            $checkStmt = $this->pdo->prepare("SELECT id FROM users WHERE email = :email LIMIT 1");
            $checkStmt->execute(['email' => $this->email]);
            if ($checkStmt->fetch()) {
                return [
                    'status' => 'error',
                    'message' => 'Email is already registered',
                    'id' => null
                ];
            }

            // Hash password
            $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 12]);

            // Insert user
            $fields = [
                'firstname' => $this->firstname,
                'lastname'  => $this->lastname,
                'email'     => $this->email,
                'password'  => $hashedPassword,
                'user_type' => $this->user_type,
                'status'    => $this->status
            ];

            $columns = implode(', ', array_keys($fields));
            $placeholders = ':' . implode(', :', array_keys($fields));
            $sql = "INSERT INTO users ($columns) VALUES ($placeholders)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($fields);

            return [
                'status'  => 'success',
                'message' => 'User registered successfully',
                'id'      => $this->pdo->lastInsertId()
            ];
        } catch (PDOException $e) {
            return [
                'status'  => 'error',
                'message' => 'Database error: ' . $e->getMessage(),
                'id'      => null
            ];
        }
    }

    // ---------------- Login ----------------
    public function loginUser(): array
    {
        // Validation
        if (empty(trim($this->email)) || empty(trim($this->password))) {
            return [
                'status'  => 'error',
                'message' => 'Email and password are required',
                'id'      => null
            ];
        }

        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
            $stmt->execute(['email' => $this->email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user || !password_verify($this->password, $user['password'])) {
                return [
                    'status'  => 'error',
                    'message' => 'Invalid email or password',
                    'id'      => null
                ];
            }

            // Successful login
            return [
                'status'  => 'success',
                'message' => 'User logged in successfully',
                'id'      => $user['id'],
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
                'status'  => 'error',
                'message' => 'Database error: ' . $e->getMessage(),
                'id'      => null
            ];
        }
    }
}
