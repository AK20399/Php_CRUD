<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home</title>
</head>
<style>
    a:hover{
        text-decoration:none;
        color:red;
    }
</style>
<body style="text-align:center">

<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./home.php">CRUD OPERATION</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" style="margin-left:50px">
        <a class="nav-link" href="./home.php">Home <span class="sr-only">(current)</span></a>
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
<h1 style="margin-top:30px;margin-bottom:50px;text-decoration:underline">Crud operation on Mysql using php</h1>
<?php 
include('./phpstuff/connect.php')
?>
<div class="list-group">
<h3><a class="list-group-item list-group-item-action list-group-item-primary" href="./db/db.php">Create Database</a></h3>
<h3><a class="list-group-item list-group-item-action list-group-item-primary" href="./db/deletedb.php">Delete Database</a></h3>
<h3>    <a class="list-group-item list-group-item-action list-group-item-primary" href="./insert/insert.php">Create in Mysql</a></h3>
<h3>    <a class="list-group-item list-group-item-action list-group-item-primary" href="./read/read.php">Read in Mysql</a></h3>
<h3>    <a class="list-group-item list-group-item-action list-group-item-primary" href="./update/update.php">Update in Mysql</a></h3>
<h3>    <a class="list-group-item list-group-item-action list-group-item-primary" href="./delete/delete.php">Delete in Mysql</a></h3>
</div>
</div>
</section>
</body>
</html>