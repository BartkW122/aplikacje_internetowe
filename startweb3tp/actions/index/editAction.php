<?php
    //echo $_POST['name'];
    $sql = "SELECT * FROM users";
    $res = $db->query($sql);
    $user_id;
    if ($res->num_rows > 0)
    {
	while ($row = $res->fetch_assoc())
	{
        //echo $row['id'];
        if($_POST['name']==$row['user_name']||$_POST['surname']==$row['user_surname']||$_POST['email']==$row['user_email']||$_POST['password']==$row['user_password']){
                //echo $row['id'];
                $form['id']=$row['id'];
                $user_id=$form['id'];
                $form['name']=$row['user_name'];
                $form['surname']=$row['user_surname'];
                $form['email']=$row['user_email'];
                //echo $form['id'];
        }
	}
   
    }
    else
    {
    echo '<p class="text-danger">Nie znaleziono wpisów</p>';
    }
    echo $user_id;
    $update="UPDATE usres SET user_name='{$_POST['name']}',user_surname='{$_POST['surname']}',user_email='{$_POST['email']}' WHERE id='$user_id'";
    if ($db->query($update)){
        $dbStatus = ['status' => 'success', 'msg' => 'Uzytkowink zostal edytowany'];
    }else{
        $dbStatus = ['status' => 'warning', 'msg' => 'Uzytkowink nie zostal edytowany'];
    }