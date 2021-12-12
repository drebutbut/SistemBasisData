<?php

    include 'connect.php';

    if(isset($_GET['hapusidka'])){
        $id_ka=$_GET['hapusidka'];

        $sql="DELETE FROM tbl_kereta WHERE id_ka=$id_ka";
        $result=mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil dihapus";
            header('location:kereta.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>