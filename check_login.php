<?php include 'database.php';?>
 
<?php
 
// create a variable
$username=$_POST['username'];
$password=$_POST['password']; 
//Execute the query

$sql="SELECT * FROM customer_details WHERE username='$username' and password='$password'";
$result=mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);

if($count){
    header("Location: main.php");
   exit;
}
else
{
    echo "invalid credentials";
}


?>