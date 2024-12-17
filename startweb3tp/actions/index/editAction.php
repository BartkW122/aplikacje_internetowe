<?php
    //echo $_POST['name'];
    if (isset($_REQUEST['id']) && !empty($_REQUEST['id']))
    {

        $id = (int) $_REQUEST['id'];
    
        $sql = "SELECT * FROM users";
        $res = $db->query($sql);
        
        if ($res->num_rows > 0)
        {
        while ($row = $res->fetch_assoc())
        {   
            if($id==$row['id']){
                echo $row['id']."<br>";
                echo $row['user_name']."<br>";
                echo $row['user_surname']."<br>";
                echo $row['user_email']."<br>";
                $form['id']=$row['id'];
                $form['name']=$row['user_name'];
                $form['surname']=$row['user_surname'];
                $form['email']=$row['user_email'];
                $update="UPDATE users SET user_name='{$_POST['name']}',user_surname='{$_POST['surname']}',user_email='{$_POST['email']}' WHERE id='$id'";
                if ($db->query($update)){
                    $dbStatus = ['status' => 'success', 'msg' => 'Uzytkowink zostal edytowany'];
                }else{
                    $dbStatus = ['status' => 'warning', 'msg' => 'Uzytkowink nie zostal edytowany'];
                }
            }
         
        }
    
        }else
        {
            echo '<p class="text-danger">Nie znaleziono wpisów</p>';
        }
        
        /*$form['name']=$_POST['name'];
        $form['surname']=$_POST['surname'];
        $form['email']=$_POST['email'];
        echo "name:".$form['name'];
        echo $_POST['name']."<br>";*/
    }

   echo $_POST['name']."<br>";
   echo $_POST['surname']."<br>";
   echo $_POST['email']."<br>";
//    $update="UPDATE users SET user_name='{$_POST['name']}',user_surname='{$_POST['surname']}',user_email='{$_POST['email']}' WHERE id='$id'";
//    if ($db->query($update)){
//        $dbStatus = ['status' => 'success', 'msg' => 'Uzytkowink zostal edytowany'];
//    }else{
//        $dbStatus = ['status' => 'warning', 'msg' => 'Uzytkowink nie zostal edytowany'];
//    }