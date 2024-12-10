<!DOCTYPE html>
<html data-bs-theme="dark">
    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/style.css" />

		<script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>
	</head>
	
	<body>
		<nav class="navbar navbar-light bg-light">
			<span class="navbar-brand"><?php $_SESSION['user']['name']?></span>
			<li class="nav-item">
        		<a class="nav-link" href="logout.php">Wyloguj</a>
      		</li>
		</nav>
		
		<main>
			<section class="content">
				<?php
					$page = isset($_GET['page']) ? $_GET['page'] : 'index';
					$action = isset($_GET['action']) ? $_GET['action']: 'index';
					if(is_file($actionFile="actions".DIRECTORY_SEPARATOR.$page.DIRECTORY_SEPARATOR.$action.'Action.php')){
						include($actionFile);
						if (is_file($file = 'templates/views' . DIRECTORY_SEPARATOR . $page . DIRECTORY_SEPARATOR . $action . '.php'))
						{
							include ($file);
						}
					}
					else
					{
						//die('Forget about it');
						throw new Exception ('Cannot include file: ' . $actionFile);
					}
					//exit;
				?>
			</section>
		</main>
    </body>
</html>