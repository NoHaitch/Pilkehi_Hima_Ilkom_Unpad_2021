<?php 
    session_start();
    if($_SESSION['panitia']!=true){
        header('location:panitia.php');
    }
    if($_POST['id']>0){
        $_SESSION['pid']=$_POST['id'];
    } 
    else{if($_SESSION['pid']>0){
        $_POST['id']=$_SESSION['pid'];}
        else{
            header("location:tabeldata.php");
        }
    }
    include "koneksi.php";
    $id = $_POST['id'];
    if($data = mysqli_query($koneksi,"SELECT * FROM `tabeldata` WHERE `id`=$id")){
        foreach ($data as $row) {

        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="./styles/detail/edit.css">
</head>
<body>
    <a href="tabeldata.php">Kembali</a>
    <div class="isi">
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td>
                    <?php 
                        echo $row['id'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <?php 
                        echo $row['nama'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <?php 
                        echo $row['username'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td>
                    <?php 
                        echo $row['password'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <?php 
                        echo $row['email'];
                    ?>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <?php 
                        if($row['pilihan']!=""){
                            echo "Sudah Pilih";
                        }else{
                            echo "Belum Pilih";
                        }
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <script>
        if ( window.history.replaceState ) {window.history.replaceState( null, null, window.location.href );}
    </script>
</body>
</html>