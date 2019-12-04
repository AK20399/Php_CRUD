<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body style="text-align:center">
<h3><a href="../home.php">Go To Home Page</a></h3>
    <h1>Update</h1>
    <form>
    <input type="text" name="id" placeholder="Enter Id number to be updated"><br><br>
    <input type="text" name="firstname" placeholder="Enter Firstname"><br><br>
    <input type="text" name="lastname" placeholder="Enter Lastname"><br><br>
    <input type="submit" value="submit" name="submit">
    </form>

    <?php 
    include('.././phpstuff/connection.php');
    if(isset($_REQUEST['submit'])=== true){
            $firstname = $_REQUEST['firstname'];
    $id = $_REQUEST['id'];
    $lastname = $_REQUEST['lastname'];

        $sql = "UPDATE data SET firstname = '$firstname',lastname = '$lastname' WHERE id =  '$id'";

        if($conn->query($sql)=== true){
            echo "data updated";
        }
        else{
            echo "error data not updated".$conn->error;
        }
    }

    
    ?>

</body>
</html>