<?php

header('Content-Type: text/html; charset=UTF-8');

require('app/config/config.php');
require('app/config/db.php');
require('app/functions/validate.function.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{	
	fieldRequired('Imię', $_POST['name']);
	fieldRequired('Nazwisko', $_POST['surname']);
	fieldRequired('E-mail', $_POST['email']);
	fieldRequired('Hasło', $_POST['password']);
	if(!$isError)
	{
		isEmail('E-mail', $_POST['email']);
	}

	if (!$isError)
	{	
		$password = md5(PASS_SALT . $_POST['password']);
		$query = "INSERT INTO users SET user_name = '{$_POST['name']}', user_surname = '{$_POST['surname']}', user_email = '{$_POST['email']}', user_password = '$password'";
		if ($db->query($query))
		{
			echo 'Data was inserted Successfully';
		}
		else
		{
			echo 'Data has not been inserted!';
		}
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	
	<body>
		<section>
			<?php include ('templates/form.html.php'); ?>
			
			<div class="con">
			<h1>Lista Użytkownikow</h1>
				<?php
					$q="SELECT * FROM users";
					$result=$db->query($q);
					echo "<table>";
					echo "<th>id:</th> <th>name:</th> <th>surname</th> <th>mail:</th> <th>password:</th>";
					while($row=$result->fetch_assoc()){
					echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['user_name']."</td>";
						echo "<td>".$row['user_surname']."</td>";
						echo "<td>".$row['user_email']."</td>";
						echo "<td>".$row['user_password']."</td>";
					echo "</tr>";
					}
					echo "</table>";
				?>
			</div>
		</section>
	</body>
</html>