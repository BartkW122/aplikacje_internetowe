<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    fieldRequired('file', $_FILES['plik']['name']);
	fieldRequired('autor', $_POST['autor']);
	fieldRequired('tytul', $_POST['name']);
    fieldRequired('tersc', $_POST['tresc']);
	echo "cwecfw";

	if (!$isError)
	{	
		/* status Bool(true|false), msg String) */
		$dbStatus = [];
		$data=date("d-m-Y");
		$query = "INSERT INTO news SET news_filename = '{$_POST['plik']}', news_title = '{$_POST['name']}', news_author = '{$_POST['autor']}', news_content = '{$_POST['tresc']}',news_publish_date='$data'";
        if ($db->query($query))
        {
            $_SESSION['message']['success'] = 'Data has been saved successfully';
        }
        else
        {
            $_SESSION['message']['warning'] = 'Data has not been saved!';
        }
	}
	else
	{
		$form = $_POST;
	}
}