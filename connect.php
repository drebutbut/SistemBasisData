<?php

    $conn=new mysqli('localhost', 'root', '', 'keretaapiindonesia');

    if($conn){
        #echo "Basis data terkoneksi";
    }
    else{
        die(mysqli_error($conn));
    }

?>