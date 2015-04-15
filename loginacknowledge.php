<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			if ($_POST["uname"]=="shashi" && $_POST["pswd"]=="s123") {
				echo "<h1> Welcome ", $_POST["uname"],"</h1>";
			}
			else {
				echo "<h1> please try again !!</h1>";
			}
		?>
	</body>
</html>