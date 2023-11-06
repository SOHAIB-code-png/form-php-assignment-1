<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&display=swap');
    * {
        font-family: 'JetBrains Mono';
        font-size: 12px;
    }

    h2 {
        font-size: 16px;
    }

    th,td {
        text-align: left;
        padding: 5px;
    }

    th {
        width: 100px;
    }
</style>
<body>
    <h2>User List</h2>
    <hr>
    <table border=0>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
        </tr>
        <?php
        $host = "localhost";
        $username = "admin";
        $password = NULL;
        $database = "user_management";

        $conn = new mysqli($host, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No users found.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
    <hr>
    <a href="index.php">User Form</a>
</body>
</html>
