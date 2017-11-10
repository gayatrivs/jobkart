<html>
<head>
	<title></title>
</head>
<body>
	<h4> Hello {{ $user->name }}!</h5>
	<p> We have received your application for the post of {{ $job->job_title }} at {{ $provider->name }}. We will intimate you with further progress shortly.</p>
	<h4>Regards,<br>The JobKart team</h4>
</body>
</html>