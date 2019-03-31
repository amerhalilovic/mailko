<?php

    $conn = mysqli_connect('localhost','root','123456','phpblog');

    if(mysqli_connect_errno()){
        //Faild To Connect
        echo "Faild To Connect".mysqli_connect_errno();
    }