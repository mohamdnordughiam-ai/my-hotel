
<?php

$conn = new mysqli("localhost", "mohamd" , "Ab_152**Eb" , "Nours");

if ($_SERVER["REQUEST_METHOD"] == "post") {
    // om det är en POST request
    $username = $_POST ["username"];
    $password = $_POST["password"];
    $sql = "INSERT INTO Nours (name, password) VALUES ('$title', '$beskrivning')";

    $conn->query($sql);


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
    <form method="post">
        <label>username:</label>
        <input type="text" name="username">
        <label>password:</label>
        <input type="password" name="password">
         <input type="submit">



    </form>
    
</body>
</html>