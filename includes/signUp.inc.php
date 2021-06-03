<?php
session_start();
include "db.inc.php";

if (isset($_POST["first_name"])) 
{
	$f_name = $_POST["first_name"];
	$l_name = $_POST["last_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	//With the following we validate the user's input
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
	//With the following we validate the user's input
	if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword))
	{	
		echo "
			<div class='alert alert-warning' role='alert'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} 
	else 
	{
		if(!preg_match($name,$f_name)){
			echo "
				<div class='alert alert-warning' role='alert'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $f_name is not valid..!</b>
				</div>
			";
			exit();
		}
		if(!preg_match($name,$l_name)){
			echo "
				<div class='alert alert-warning'>
					<a href='loginSignup.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $l_name is not valid..!</b>
				</div>
			";
			exit();
		}
		if(!preg_match($emailValidation,$email)){
			echo "
				<div class='alert alert-warning'>
					<a href='loginSignup.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $email is not valid..!</b>
				</div>
			";
			exit();
		}
		if(strlen($password) < 8 ){
			echo "
				<div class='alert alert-warning'>
					<a href='loginSignup.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Password is weak</b>
				</div>
			";
			exit();
		}
		if(strlen($repassword) < 8 ){
			echo "
				<div class='alert alert-warning'>
					<a href='loginSignup.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Password is weak</b>
				</div>
			";
			exit();
		}
		if($password != $repassword){
			echo "
				<div class='alert alert-warning'>
					<a href='loginSignup.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>password is not same</b>
				</div>
			";
		}

		//existing email address in our database
		$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
		$check_query = mysqli_query($con,$sql);
		$count_email = mysqli_num_rows($check_query);
		if($count_email > 0)
		{
			echo "
				<div class='alert alert-danger'>
					<a href='loginSignup.php' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Email Address is already available Try Another email address</b>
				</div>
			";
			exit();
		} 
		else 
		{
			$sql = "INSERT INTO user_info ( first_name, last_name,email, password) 
			VALUES ('$f_name', '$l_name', '$email', '$password'); ";
			$run_query = mysqli_query($con,$sql);
			$_SESSION["uid"] = mysqli_insert_id($con);
			$_SESSION["name"] = $f_name;
			$ip_add = getenv("REMOTE_ADDR");
			$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
			if(mysqli_query($con,$sql))
			{
				header("Location: index.php");
				exit();
			}
		}
	}
}

