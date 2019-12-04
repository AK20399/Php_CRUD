<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
</head>
<body style="text-align:center">
<h3><a href="../home.php">Go To Home Page</a></h3>
    <h1>Read</h1>
    <?php 
    include('.././phpstuff/connection.php');
    $sql = "SELECT * FROM DATA";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
    ?>
</body>
</html>