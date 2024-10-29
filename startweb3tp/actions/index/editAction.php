<?php
    echo $_POST['name'];
    $sql = "SELECT * FROM users";
    $res = $db->query($sql);
    if ($res->num_rows > 0)
    {
	while ($row = $res->fetch_assoc())
	{
        if(!empty($_POST)){
            if($_POST['name']==$row['user_name']||$_POST['surname']==$row['user_surname']||$_POST['email']==$row['user_email']||$_POST['password']==$row['user_password']){
                echo $row['id'];
                $form['name']=$row['user_name'];
                $form['surname']=$row['user_surname'];
                $form['email']=$row['user_email'];
                $form['password']=$row['user_password'];
            }
        }
	}
   
    }
    else
    {
    echo '<p class="text-danger">Nie znaleziono wpisów</p>';
    }
