<?php
    $conn = mysqli_connect('localhost','root','123456','phpblog');

    if(mysqli_connect_error()){
        echo "Problem pri konektovanju".mysqli_connect_error();
    }

?>



