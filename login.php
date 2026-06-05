<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT name, password FROM Nours WHERE name = '$username' AND password = '$password'";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);
if($data->num_rows() == 1) {
    echo "You are signed in!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <label>username:</label>
        <input type="text" name="username">
        <label>password:</label>
        <input type="password" name="password">
         <input type="submit">
    </form>
    
</body>
</html>


</form>



    
</body>
</html>