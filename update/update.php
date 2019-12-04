<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Update</title>
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
        <a class="nav-link" target="_blank" href="https://github.com/AK20399/Php_CRUD.git">Git Repo</a>
      </li>
    </ul>
  </div>
</nav>
</header>



<section style="margin-top:100px">
<div class="container">
    <h1>Update</h1>
    <form>

       <div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">ID</span>
  </div>
  <input type="text" name="id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Please Enter ID to be Updated">
</div>
<br>

       <div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">FirstName</span>
  </div>
  <input type="text" class="form-control" name="firstname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Please Enter FirstName">
</div>
<br>

       <div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">LastName</span>
  </div>
  <input type="text" class="form-control" name="lastname" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Please Enter LastName">
</div>
<br>
    <input type="submit" class="btn-lg btn-primary" value="submit" name="submit"><br><br>
    </form>

    <?php 
    include('.././phpstuff/connection.php');
    if(isset($_REQUEST['submit'])=== true){
            $firstname = $_REQUEST['firstname'];
    $id = $_REQUEST['id'];
    $lastname = $_REQUEST['lastname'];

        $sql = "UPDATE data SET firstname = '$firstname',lastname = '$lastname' WHERE id =  '$id'";

        if($conn->query($sql)=== true){
            echo "<h3>data updated</h3>";
        }
        else{
            echo "error data not updated".$conn->error;
        }
    }

    
    ?>

</body>
</html>