<?php
include_once('db.php');
if(isset($_POST['submit'])){
	$name = $_POST['fullname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	    if (empty($name)) {

        header("Location: index.php?error=Full Name is required");

        exit();

    }else if(empty($email)){

        header("Location: index.php?error=Email is required");

        exit();

    }
	else if(empty($password)){

        header("Location: index.php?error=Password is required");

        exit();

    }
	else{
	// Check if email is exist
	$select = "SELECT email FROM users WHERE email='$email'";
	$get_email = mysqli_query($conn,$select);
	if(mysqli_num_rows($get_email)) {
    exit('This email address is already used!');
}
else{
$insert = "INSERT INTO users(name,email,pass)VALUES('$name','$email','$password')";
if(mysqli_query($conn, $insert)){  

 header("Location: login.php");

}else{  

echo "Not insert";  

}
}
  
}
}

if(isset($_POST['login'])){
	$uname = $_POST['email'];
	echo $pass = md5($_POST['password']);
    if (empty($uname)) {

        header("Location: login.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

         $sql = "SELECT * FROM users WHERE email='$uname' AND pass='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: home.php");

                exit();

        }else{

            header("Location: login.php?error=Incorect User name or password");

            exit();

        }

    }

}
