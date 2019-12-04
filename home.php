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
<body>

<div class="container" style="text-align:center">
<h1 style="margin-top:30px;margin-bottom:50px;">Crud operation on Mysql using php</h1>
<?php 
include('./phpstuff/connect.php')
?>
<h3><a href="./db/db.php">Create Database</a></h3>
<h3><a href="./db/deletedb.php">Delete Database</a></h3>
<h3>    <a href="./insert/insert.php">Create in Mysql</a></h3>
<h3>    <a href="./insert/read.php">Read in Mysql</a></h3>
<h3>    <a href="./insert/update.php">Update in Mysql</a></h3>
<h3>    <a href="./insert/delete.php">Delete in Mysql</a></h3>
</div>

</body>
</html>