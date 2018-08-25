<?php 

	session_start();

	if(isset($_POST['submit'])){

		include 'db.inc.php';

		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		if(empty($uid) || empty($pwd)){
			header("Location: ../index.php?login=empty");
			exit();
		}else{
			$sql = "SELECT * FROM users WHERE userid='$uid' || email='$uid'";
			$result = mysqli_query($conn, $sql);
			$nr_result = mysqli_num_rows($result);
			if($nr_result < 1){
				header("Location: ../index.php?login=error");
				exit();
			}else{
				$row = mysqli_fetch_assoc($result);
				$verify_pwd = password_verify($pwd, $row['password']);
				if($verify_pwd == false){
					header("Location: ../index.php?login=error");
					exit();
				}else{
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['fname'];
					$_SESSION['u_last'] = $row['lname'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_uid'] = $row['userid'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}else{
		header("Location: ../index.php?login=error");
		exit();
	}
