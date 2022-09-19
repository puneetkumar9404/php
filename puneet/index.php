<html>
<head>
<title>PHP</title>
<script>
function submitform(){
	var res = true;
	var name = document.getElementById("fullname").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	
	var namemsg = "";
	var emailmsg = "";
	var passwordmsg = "";
	var passwordmsglength = "";
if(name=="" || name==null){
	res = false;
	namemsg = "Please enter the full name.";
}
if(email=="" || email==null){
	res = false;
	emailmsg = "Please enter the email.";
}
if(password=="" || password==null){
	res = false;
	passwordmsg = "Please enter the password.";
}
if(password.length < 8){
	res = false;
	passwordmsglength = "Password should be 8 char.";
}
document.getElementById("namemsg").innerHTML = namemsg;
document.getElementById("emailmsg").innerHTML = emailmsg;
document.getElementById("passwordmsg").innerHTML = passwordmsg;
document.getElementById("passwordmsglength").innerHTML = passwordmsglength;
return res;
}
</script>
</head>
<body>
<?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
<form action="function.php" method="post" onsubmit="return submitform();">
<table border="1">
<tr><td>Name:</td><td><input type="text" name="fullname" id="fullname"><span id="namemsg"></span></td></tr>
<tr><td>Email:</td><td><input type="email" name="email" id="email"><span id="emailmsg"></span></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" id="password"><span id="passwordmsg"></span><span id="passwordmsglength"></span></td></tr>
<tr><td>Button:</td><td><input type="submit" name="submit" id="submit" value="Save"></td></tr>
</table>
</form>
</body>
</html>
