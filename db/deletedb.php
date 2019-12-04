<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Database</title>
</head>
<body>
<h1>Delete Datbase</h1><br><br>
    <?php
    include('.././phpstuff/connect.php');
    $sql = "DROP DATABASE IF EXISTS mydb";
if ($conn->query($sql) === TRUE) {
    echo "Database Dropped successfully<br>";
} else {
    echo "Error creating database:<br> " . $conn->error;
}
?>
</body>
</html>