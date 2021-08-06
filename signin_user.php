<?php
session_start();
include("include/connection.php");
if(isset($_POST['signin'])){

$email=$_POST['email'];
$pass=$_POST['pass'];

$select_user="SELECT * FROM users WHERE user_email='$email' AND user_pass='$pass' ";
$rs=$con->query($select_user);
if($rs->num_rows>0)
{
	$_SESSION['user_email']=$email;
	$update_msg=mysqli_query($con,"UPDATE users SET log_in='online' WHERE user_email='$email'");

	while($row =$rs->fetch_assoc()){
		$_SESSION['cid']=$row['user_id'];
		$_SESSION['cname']=$row['user_name'];
		header("location:home.php");
	}
	
		
		
	
}

}
else
{
	?>
	<script>
		alert("...invalid login....!"); 
		window.location="signup.php";
		
	</script>
	<?php
}
?>