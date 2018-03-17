<?php include 'database.php';?>
 
<?php
 
// create a variable
$name=$_POST['name'];

if($name=="logout")

{
	header('Location: login.php');
		exit;
}
if($name=="done")

{
	header('Location: login.php');
	
		exit;
}

$sql="SELECT * FROM halls WHERE name='$name'";
$result=mysqli_query($connect,$sql);
$count = mysqli_num_rows($result);

if($count)
{


	while($row = mysqli_fetch_assoc($result)) {
		$n=$row['name'];
		$p=$row['phone'];
		$a=$row['address'];
		$pic=$row['photo'];
session_start();

$_SESSION['n'] = $n;
$_SESSION['a'] = $a;
$_SESSION['p'] = $p;
$_SESSION['pic'] = $pic;



	header('Location: info.php?&n='.$n.'&p='.$p.'&a='.$a.'&pic='.$pic);
		exit;
	}
}
else
{
	echo "row not found";
}

?>