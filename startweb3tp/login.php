<?php
include("app/config/session.php");
include("app/config/config.php");
include("app/config/db.php");
if(!empty($_POST['email']) && !empty($_POST['password'])){
    $password = md5(PASS_SALT . $_POST['password']);
    $sql = "SELECT * FROM users";
    $res = $db->query($sql);
    if ($res->num_rows > 0)
    {
        while ($row = $res->fetch_assoc())
        {
            echo "email: ".$row['user_email']." haslo: ".$row['user_password'];
            echo '<br>';
            echo "email form :".$_POST['email']." haslo form: ".$password;
            echo '<br>';
            if($row['user_email']==$_POST['email'] && $row['user_password']==$password){
                $_SESSION['user']['email']=$_POST['email'];
                $_SESSION['user']['haslo']=$password;
                $_SESSION['user']['name']=$row['user_name'];
                unset($_SESSION['message']);
            }else{
                $_SESSION['message']['warning']="nie ma takiego uzytkownika";
            }
            
        }

    }

    echo $_SESSION['user']['email'];
    echo $_SESSION['user']['haslo'];
    echo $_SESSION['user']['name'];
    header("Location:index.php");
    exit();
}else{
    $_SESSION['message']['warning']="pola nie moga byc puste";
    header("Location:index.php");
    exit();
}
