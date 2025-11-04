<?php
$envPath = '../.env';

if (!file_exists($envPath)) {
    die(".env file not found at $envPath");
}

$lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
foreach ($lines as $line) {
    // Ignore comments
    if (strpos(trim($line), '#') === 0) continue;

    // Split key and value
    list($name, $value) = explode('=', $line, 2);

    $name = trim($name);
    $value = trim($value);

    // Remove quotes if present
    $value = trim($value, "\"'");

    // Set environment variables
    putenv("$name=$value");
    $_ENV[$name] = $value;
    $_SERVER[$name] = $value;
}



$host = $_ENV['HOSTNAME'];
$user = $_ENV['USERNAME'];
$pass = $_ENV['PASSWORD'];
$dbname = $_ENV['DATABASE'];

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
