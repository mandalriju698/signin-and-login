<?php
include("include/connection.php");
if(isset($_POST['sign_up'])){


$name=$_POST['user_name'];
$pass=$_POST['user_pass'];
$email=$_POST['user_email'];
$country=$_POST['user_country'];
$gender=$_POST['user_gender'];


$rand=rand(1,2);
if($name==''){

	echo "<script>alert('we can not varify your name!')</script>";
}
if(strlen($pass)<8){
	echo "<script>alert('password shoud be minimum 8 characters!!')</script>";
exit();


}

if($rand==1)
$profile_pic="images/User-icon-256-blue.png";
else if($rand==2)
		$profile_pic="images/Client_Female_Light.jpg";
 $ins="INSERT INTO users SET user_name='$name',user_pass='$pass',user_email='$email',	user_profile='$profile_pic',	user_country='$country',	user_gender='$gender'"; 
 $con->query($ins);

//if($query){

	//echo"<script>alert('congratulation $name,your account has been created successfully')</script";
	//echo "<script>window.open('signin.php','_self')</script>";
//}

header("location:signin.php");
}



?>