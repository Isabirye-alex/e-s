<?php
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../models/users.php';

// Make sure $pdo exists
if (!isset($pdo)) {
    die("PDO connection not found!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'] ?? '';
    $lastname  = $_POST['lastname'] ?? '';
    $email     = $_POST['email'] ?? '';
    $password  = $_POST['password'] ?? '';
    $user_type = 'Admin';
    $status    = 'Active';

    // Create the User object
    $userModel = new User($pdo, 0, $firstname, $lastname, $email, $password, $user_type, $status);

    // Register
    $registerResult = $userModel->registerUser();

    var_dump($registerResult);
} else {
    echo "Please submit the form.";
}
