<?php

    include 'connect.php';

    if(isset($_GET['hapusidtiket'])){
        $id_tiket=$_GET['hapusidtiket'];

        $sql="DELETE FROM tbl_tiket WHERE id_tiket=$id_tiket";
        $result=mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil dihapus";
            header('location:tiket.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>