<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico">
	<title>On-Off Tool</title>
	<link rel="stylesheet" type="text/css" href="/public/css/style.css">
</head>
<body>
	<div class="form-style">
		<h2>ON-OFF TOOL</h2>
		    <form method="POST" id="form" action="./execute.php" enctype="multipart/form-data">
				<textarea name="cooperation" placeholder="Inventory cooperation" required></textarea></br>
				<textarea name="cooperationOn" placeholder="Inventory cooperation ON"></textarea></br>
				<textarea name="cooperationOff" placeholder="Inventory cooperation OFF"></textarea></br>
			    <input type="submit" value="submit">
		    </form>
	</div>
</body>
</html>
