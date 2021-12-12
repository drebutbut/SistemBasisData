<?php

    include 'connect.php';

    if(isset($_GET['hapusidtransaksi'])){
        $id_transaksi=$_GET['hapusidtransaksi'];

        $sql="DELETE FROM tbl_pelaksanaan WHERE id_transaksi=$id_transaksi";
        $result=mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil dihapus";
            header('location:transaksi.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>