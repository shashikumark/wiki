<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="signup.css"></link>
	</head>
	<body>



		<h1>Welcome</h1>
		<hr>
		<div>
			<div id="section1">
				<h3>Welcome.  	Think SECURITY when processing PHP forms!</h3><br>
			</div>
			<div id="section2">
				<form action="" method="post">
					<table>
						<th>
							<td>Sign Up</td>
						</th>
						<tr>
							<td>Username</td>
							<td><input type="text" name="uname"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="pswd"></td>
						</tr>
						<tr>
							<td>Retype Password</td>
							<td><input type="password" name="pswd"></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>Male<input type="radio" name="gender" value="male"> Female<input type="radio" name="gender" value="female"></td>
						</tr>
						<tr>
							<td>Age</td>
							<td><input type="number" name="age"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value="Sign Up"></td>
						</tr>
					</table>
				</form>

			</div>
		</div>

<?php 
		
		if(isset($_POST["submit"])) {
			$uname=$_POST["uname"];
			$pswd=$_POST["pswd"];
			$gender=$_POST["gender"];
			$age=$_POST["age"];
			$conn=new mysqli("localhost","logdata");
			if ($conn) {
				$sql = "INSERT INTO user (uname, pswd, gender, age) VALUES ('$uname','$pswd','$gender','$age')";
				if ($conn->query($sql) === TRUE) {
					echo "Sign up successfull";
				} 
				else {
					echo "Error: <br>";
				}

				$conn->close();
				//header("location:/PHP/signupacknowledge.php");
			}
		}
?>

	</body>
</html>