<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>留言本</title>
<link rel="stylesheet" type="text/css" href="style.css">

</style>
</head>

<body>
	<div id="container">
		<h1>GUSET BOOK</h1>
		<div id="body">
			<h3>请填写资料</h3>
			<form action="post.php" method="post" accept-charset="utf-8">
				<strong>Name:</strong><input type="text" name="name" ><br/>
				<strong>Email:</strong><input type="text" name="email" ><br/>
				<strong>Message:</strong><textarea name="message" rows="5" cols="20"></textarea><br />
				<input type="submit" name="submit" value="Submit">

			</form>
		</div>
	</div>
</body>
</html>