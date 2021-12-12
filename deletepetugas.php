<?php

    include 'connect.php';

    if(isset($_GET['hapuspetugas'])){
        $id_petugas=$_GET['hapuspetugas'];

        $sql="DELETE FROM tbl_petugas WHERE id_petugas=$id_petugas";
        $result=mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil dihapus";
            header('location:petugas.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>