<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h3>Password Reset</h3>

		<div>
			You recently requested to reset your Spinal Injury Project account password.<br><br>
			Please set a new password by following the link provided below:<br><br>
			{{ URL::to('password/reset', array($token)) }}<br>
			<br>
			This link will expire in {{ Config::get('auth.reminder.expire', 60) }} minutes.
			<br><br>
			Thank you!<br><br>
			The SIP Team
			<br><br>
			<img src="{{ $message->embed(public_path() . '/images/Site_logo.png') }}" width="10%"/>
			
		</div>
	</body>
</html>
