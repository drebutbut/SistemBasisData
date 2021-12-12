<?php

    include 'connect.php';

    if(isset($_GET['hapusstasiun'])){
        $id_stasiun=$_GET['hapusstasiun'];

        $sql="DELETE FROM tbl_stasiun WHERE id_stasiun='$id_stasiun'";
        $result=mysqli_query($conn, $sql);
        if($result){
            #echo "Data berhasil dihapus";
            header('location:stasiun.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

?>