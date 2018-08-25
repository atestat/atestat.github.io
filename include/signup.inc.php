<?php 

	if(isset($_POST['submit'])){

		include_once 'db.inc.php';

		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//Erori

		if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
			header("Location: ../index.php?signup=empty");
			exit();
		}else{
			if(!preg_match("/^[a-zA-Z ]*$/", $first) || !preg_match("/^[a-zA-Z ]*$/", $last)){
				header("Location: ../index.php?signup=invalid");
				exit();
			}else{
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					header("Location: ../index.php?signup=email");
					exit();
				}else{
					$sql = "SELECT * FROM users WHERE userid = '$uid'";
					$result = mysqli_query($conn, $sql);
					$nrresult = mysqli_num_rows($result);
					if($nrresult > 0){
						header("Location: ../index.php?signup=usertaken");
						exit();
					}else{
						$hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
						$sql = "INSERT INTO users (fname, lname, email, userid, password) VALUES ('$first', '$last', '$email', '$uid', '$hashpwd');";
						$result = mysqli_query($conn, $sql);
						header("Location: ../index.php?signup=success");
						exit();
					}
				}
			}
		}
	}else{
		header("Location: ../index.php");
		exit();
	}
