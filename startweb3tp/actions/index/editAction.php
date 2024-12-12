<?php
    //echo $_POST['name'];
    if (isset($_REQUEST['id']) && !empty($_REQUEST['id']))
    {

        $id = (int) $_REQUEST['id'];
        echo $id;
    
        $sql = "SELECT * FROM users";
        $res = $db->query($sql);
        
        if ($res->num_rows > 0)
        {
        while ($row = $res->fetch_assoc())
        {   
            if($id==$row['id']){
                echo $row['id'];
                echo $row['user_name'];
                echo $row['user_surname'];
                echo $row['user_email'];
                $form['id']=$row['id'];
                $form['name']=$row['user_name'];
                $form['surname']=$row['user_surname'];
                $form['email']=$row['user_email'];
            }
         
        }
    
        }else
        {
            echo '<p class="text-danger">Nie znaleziono wpisów</p>';
        }
        $form['name']=$_POST['name'];
        $form['surname']=$_POST['surname'];
        $form['email']=$_POST['email'];
        echo "name:".$form['name'];
        //$update="UPDATE users SET user_name='{$_POST['name']}',user_surname='{$_POST['surname']}',user_email='{$_POST['email']}' WHERE id='$id'";
        /*if ($db->query($update)){
            $dbStatus = ['status' => 'success', 'msg' => 'Uzytkowink zostal edytowany'];
        }else{
            $dbStatus = ['status' => 'warning', 'msg' => 'Uzytkowink nie zostal edytowany'];
        }*/
    }
   