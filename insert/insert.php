    <?php 
include('.././phpstuff/connect.php');
    $conn = new mysqli('localhost','aakash','ak1234','mydb');
    $sql = "CREATE TABLE IF NOT EXISTS data (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL
    )";
    if ($conn->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
</head>
<body style="text-align:center">
    <h1>Insert</h1>
    <form>
    <input type="text" name="firstname" placeholder="Enter Your First Name"><br>
    <input type="text" name="lastname" placeholder="Enter Your Sur Name"><br>
    <input type="submit" value="Submit" name="submit">

    </form>
    <?php 
    if (isset($_REQUEST["submit"]))
 {
	$firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $sql2 = "INSERT INTO data (firstname, lastname)
VALUES ('$firstname','$lastname')";

if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
    ?>
    </body>
    </html>