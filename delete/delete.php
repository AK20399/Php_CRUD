<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete</title>
</head>
<body>
   <h1>Delete</h1> 
   <form>
   <input type="text" name="id" placeholder="Enter Id number"><br><br>
   <input type="submit" value="submit" name="submit"><br><br>
   </form>
   <?php 
   include('.././phpstuff/connection.php');
    if(isset($_REQUEST['submit'])){
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM data WHERE id =$id";
        if($conn->query($sql)===true){
            echo 'Record with id ' ,$id ,' deleted Successfully';
        }
        else{
            echo 'Error Deleting Data';
        }
    }
   ?>
   <input type="submit" value="Delete all data" name="deleteall" onclick="deleteall()">
   <?php 
if($_GET){
        if(isset($_GET['deleteall'])){
            deleteall();
        }
    }

    function deleteall()
    {
       echo "The select function is called.";
    }
   ?>
   
</body>
</html>