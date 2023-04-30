<?php 
    session_start();
    if($_SESSION['login']!=true ){
        header("location:login.php");
        exit;
    }
    if($_POST['pilihan']==null){
        header("location:vote.php");
        exit;
    }
    include "koneksi.php";
    $id = $_SESSION['id'];
    $pilihan = $_POST['pilihan'];
    $data = mysqli_query($koneksi,"SELECT * FROM `tabeldata` WHERE `id`=$id");
    foreach($data as $row){
        if($row['pilihan']!=""){
            header("location:success.php");
            exit;
        } else{
            mysqli_query($koneksi,"UPDATE `tabeldata` SET `pilihan`= '$pilihan' WHERE `id`= $id");
            $_SESSION["pilihan"]=true;
            header("location:success.php");
            exit;
        }
    }
?>