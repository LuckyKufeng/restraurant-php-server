<?php
session_start();

$db = new mysqli("localhost","webdesign","webdesign","webfinal");

if(isset($_POST['submit'])){
$inputusername = htmlspecialchars($_POST['username']);
$inputpassword = htmlspecialchars($_POST['password']);
$query = "select * from useraccount where username ='$inputusername' and userpassword = '$inputpassword'";
$result = $db->query($query);
while($row = $result->fetch_assoc()){
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['userpassword'];
		header("Location:bigdata.php");	
		exit;
	}
echo "<h1>Wrong username or password!</h1>"	;
} // end isset
?>
<!DOCTYPE html>
<html lang = "en" >
<head>

<meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>    
<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">    
<!-- Loading Bootstrap -->    
<link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">    
<!-- Loading Flat UI -->    
<link href="dist/css/flat-ui.min.css" rel="stylesheet">
<link href="docs/assets/css/demo.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico">

<link href="loginpage.css" rel="stylesheet">

</head>
<body>
<form class="form-group" method="post">
<div id="title"><h3>Log in page</h3></div>
<div class = "row">
	<img src="formIcon\Finder-1-icon.png">
	<div class="has-error">
        <input type="text" placeholder="Username" class="form-control" name="username">
	</div>
</div>

<div class = "row">
	<img src="formIcon\Mail-4-icon.png">
	<div class="has-error">
        <input type="password" placeholder="Password" class="form-control" name="password">
	</div>
</div>
<button type="submit" id="submitbutton" class="btn btn-danger" name="submit" value="submit"><b>Submit</b></button>

</form>


</body>
</html>