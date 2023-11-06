<html>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&display=swap');

        * {
            font-family: 'JetBrains Mono';
            font-size: 12px;
        }
    </style>
</html>

<?php
$host = "localhost";
$username = "admin";
$password = NULL;
$database = "user_management";


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$city = $_POST['city'];


$sql = "INSERT INTO users (name, email, gender, city) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $gender, $city);

if ($stmt->execute()) {
    echo "User data saved successfully. <hr><a href='index.php'>User Form</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
