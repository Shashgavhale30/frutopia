<?php
// Database configuration
$host = 'localhost';
$db   = 'user_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

// Data Source Name
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options for PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name     = $_POST['name'];
        $phone    = $_POST['phone'];
        $address  = $_POST['address'];
        $email    = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        // Prepare SQL statement
        $stmt = $pdo->prepare("INSERT INTO users (name, phone, address, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $phone, $address, $email, $password]);

        echo "Registration successful!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
