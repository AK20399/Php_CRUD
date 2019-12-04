    <?php 
include('.././phpstuff/connect.php');
if (isset($_REQUEST["submit"]))
 {
	$firstname = $_REQUEST["firstname"];
	$lastname = $_REQUEST["lastname"];
    echo "firstname: $firstname <br> lastname: $lastname";
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
    <input type="text" name="firstname" placeholder="Enter Your First Name">
    <input type="text" name="lastname" placeholder="Enter Your Sur Name">
    <input type="submit" value="Submit" name="submit">

    </form>
    </body>
    </html>