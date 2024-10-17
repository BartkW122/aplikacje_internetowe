<!DOCTYPE html>
<html lang="en">

    <head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>

<body>
    <main>
        <?php
            $page = isset($_GET[‘page’]) ? $_GET[‘page’] : ‘index’;
            $action = isset($_GET[‘action’]) ? $_GET[‘action’] : ‘index’;
            if (is_file($file = 'templates' . DIRECTORY_SEPARATOR . $page . DIRECTORY_SEPARATOR . $action . '.php')){
                include $file;
            }else{
                die("forget about it");
            }
            exit;
        ?>
    </main>
</body>
</html>