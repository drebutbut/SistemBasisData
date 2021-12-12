<?php

    include 'connect.php';

    if(isset($_GET['hapusidjadwal'])){
        $id_jadwal=$_GET['hapusidjadwal'];

        $sql="DELETE FROM tbl_jadwal WHERE id_jadwal=$id_jadwal";
        $result=mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil dihapus";
            header('location:jadwal.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>