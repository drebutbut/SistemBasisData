<?php

    include 'connect.php';

    if(isset($_GET['hapusnik'])){
        $nik=$_GET['hapusnik'];

        $sql="DELETE FROM tbl_penumpang WHERE nik=$nik";
        $result=mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil dihapus";
            header('location:penumpang.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>