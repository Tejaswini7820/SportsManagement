<?php
include 'connect.php';

$sql = "SELECT * FROM players";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Players List</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Players List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Sport</th>
            <th>Country</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["sport"] . "</td><td>" . $row["country"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        $conn->close();
        ?>
    </table>

     <h2>Signup Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Sign Up">
    </form>


</body>
</html>
