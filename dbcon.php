<?php
    $servername = "localhost";
    // $username = "id17080021_root";
    // $password = "9WhW1Y5h}x5^X@y_";
    // $database = "id17080021_profile";

    $username = "root";
    $password = "";
    $database = "vishvpatel";

    $connect = mysqli_connect($servername,$username,$password,$database);

    if(!$connect){
        echo "database is not connect";
    }
?>