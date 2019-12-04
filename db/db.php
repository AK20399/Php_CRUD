<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Database</title>
</head>
<body>
<h1>Create Datbase</h1><br><br>
    <?php
    include('.././phpstuff/connect.php');
//     $sql1 = "DROP DATABASE IF EXISTS mydb<br>";
// if ($conn->query($sql1) === TRUE) {
//     echo "Database Dropped successfully<br>";
// } else {
//     echo "Error creating database:<br> " . $conn->error;
// }
    $sql = "CREATE DATABASE IF NOT EXISTS myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: <br>" . $conn->error;
}
?>
</body>
</html>