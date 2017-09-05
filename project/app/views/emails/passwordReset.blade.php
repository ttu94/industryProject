<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Hi there,</h3>
        <br>
		<div>
			You have recently changed your password. If you recently did this, please ignore this email. 
			<br>It is just a confirmation for your security.
			<br>
			If this wasn't you, please update your security by changing your password.
			<br>
			Sincerely,<br><br>
			The SIP Team
			<br>
			<img src="{{ $message->embed(public_path() . '/images/siteLogo.png') }}" height="120px" width="250px"/>
		</div>
	</body>
</html>