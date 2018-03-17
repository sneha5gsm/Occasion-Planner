
<?php include 'database.php';?>
 
<?php
 
// create a variable
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$username=$_POST['username'];
$password1=$_POST['password'] ;
//Execute the query
 
$sql="INSERT INTO customer_details(username,password,name,address,phone,email) VALUES('$username','$password1','$name','$address','$phone','$email')";
if (mysqli_query($connect,$sql)) {
    echo "New record created successfully";
    header("Location: main.php");
   exit;
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}
mysqli_close($connect);


?>