<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['mobile'])
    && isset($_POST['name']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$mb = validate($_POST['mobile']);

	$pass = validate($_POST['password']);
	$name = validate($_POST['name']);

	$user_data = 'email='. $email. '&name='. $name;


	if (empty($email)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($mb)){
        header("Location: signup.php?error=mobile is required&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else{

        
	    $sql = "SELECT * FROM users WHERE name='$email' ";
		
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(name, email,mobile,password) VALUES('$name','$email', '$mb', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}
?>