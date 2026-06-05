<?php
$conn = new mysqli("localhost", "mohamd" , "Ab_152**Eb" , "Nours");

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT name, password FROM Nours WHERE name = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    if($result->num_rows == 1) {
        $newName = $data["name"];
        $newPassword = $data["password"];
        echo "You are signed in!" . "You signed in as $newName with the password $newPassword";
    }
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
    <form method="POST">
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