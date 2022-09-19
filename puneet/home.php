<html>
<head>
<title>PHP</title>
</head>
<body>
<?php 
include_once('db.php');
if(isset($_SESSION['name'])){
	echo 'Name: '.$_SESSION['name'];
}
?>
</body>
</html>
