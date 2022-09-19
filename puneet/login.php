<html>
<head>
<title>PHP</title>
<script>
function loginform(){
	var res = true;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	
	var emailmsg = "";
	var passwordmsg = "";
if(email=="" || email==null){
	res = false;
	emailmsg = "Please enter the email.";
}
if(password=="" || password==null){
	res = false;
	passwordmsg = "Please enter the password.";
}
document.getElementById("emailmsg").innerHTML = emailmsg;
document.getElementById("passwordmsg").innerHTML = passwordmsg;
return res;
}
</script>
</head>
<body>
<?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
<form action="function.php" method="post" onsubmit="return loginform();">
<table border="1">
<tr><td>Email:</td><td><input type="email" name="email" id="email"><span id="emailmsg"></span></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" id="password"><span id="passwordmsg"></span><span id="passwordmsglength"></span></td></tr>
<tr><td>Login Button:</td><td><input type="submit" name="login" id="login" value="Login"></td></tr>
</table>
</form>
</body>
</html>
