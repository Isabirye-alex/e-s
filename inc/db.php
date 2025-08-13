<?php
$host = '193.203.166.229';
$dbname = 'u798721532_lex';
$username = 'u798721532_lex';
$password = '0752687851@Al';
$port = 3306;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully!";
} catch (PDOException $e) {
    // echo "Connection failed: " . $e->getMessage();
}
