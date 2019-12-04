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
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body style="text-align:center">
<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href=".././home.php">CRUD OPERATION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="margin-left:50px">
        <a class="nav-link" href=".././home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="margin-left:25px">
        <a class="nav-link" href="https://github.com/AK20399/Php_CRUD.git">Git Repo</a>
      </li>
    </ul>
  </div>
</nav>
</header>

<div style="margin-top:100px">
<div class="container">
    <h1>Insert</h1>
    <form>
    <div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">FirstName</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="firstname" placeholder="Please Enter Your FirstName">
</div>
<br>

<div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">LastName</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="lastname" placeholder="Please Enter Your LastName">
</div>
<br>

    <input type="submit" class="btn-lg btn-primary" value="Submit" name="submit">

    </form>
    <?php 
    if (isset($_REQUEST["submit"]))
 {
	$firstname = $_REQUEST["firstname"];
    $lastname = $_REQUEST["lastname"];
    $sql2 = "INSERT INTO data (firstname, lastname)
VALUES ('$firstname','$lastname')";

if ($conn->query($sql2) === TRUE) {
    echo "<h3>New record created successfully</h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
    ?>
    </div>
    </section>
    </body>
    </html>