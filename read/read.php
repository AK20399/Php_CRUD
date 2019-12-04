<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
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



<section style="margin-top:100px">
<div class="container">
    <h1>Read</h1><br><br>
    <?php 
    include('.././phpstuff/connection.php');
    $sql = "SELECT * FROM DATA";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

    // output data of each row
        echo '<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
    </tr>
  </thead>';
    while($row = $result->fetch_assoc()) {
        echo "<tbody>";
    echo "<tr>";
    echo '<td>'.$row["id"].'</td>';
    echo '<td>'.$row["firstname"].'</td>';
    echo '<td>'.$row["lastname"].'</td>';
    echo "</tr>";
  echo "</tbody>";
    }
    echo "</table>";
}else {
    echo "0 results";
}
$conn->close();
    ?>
    </div>
    </section>
</body>
</html>