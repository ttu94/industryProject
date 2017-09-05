<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Password Reset</h3>

		<div>
			You recently requested to reset your Spinal Cord Rehabilitation password. <br>
			Please set a new password by following the link provided below:<br>
			<br>
			{{ URL::to('password/reset', array($token)) }}<br>
			<br>
			This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.
			<br>
			<br>
			Thanks,<br><br>
			- The SIP Team
			<br>
			<img src="{{ $message->embed(public_path() . '/images/siteLogo.png') }}" height="120px" width="250px"/>
			
		</div>
	</body>
</html>
