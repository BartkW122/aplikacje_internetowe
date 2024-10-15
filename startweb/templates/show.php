<?php
require 'app/config/db.php';

$q="SELECT * FROM users";
$result=$db->query($q);
echo "<table class='t'>";
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

