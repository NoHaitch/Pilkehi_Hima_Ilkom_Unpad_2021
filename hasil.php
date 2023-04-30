<?php 
    session_start();
    if($_SESSION['panitia']!=true){
        header("location:login.php");
    }
    include "koneksi.php";
    $cek = mysqli_query($koneksi,"SELECT * FROM panita");
    foreach($cek as $panitia){}
    header("refresh:300");
    date_default_timezone_set("Asia/Jakarta");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hasil</title>
</head>
<body>
    <div class="judul">
        <h1>HASIL PEMILIHAN</h1>
        <h2>pada Waktu 
        <?php
            $data = mysqli_query($koneksi,"SELECT * FROM tabeldata");
            $total = 0;
            $sudah = 0;
            $belum = 0;
            $c1 = $c2 = $c3 = 0;
            foreach($data as $row){
                $total +=1;
                if($row['pilihan']=="calon1"){
                    $c1+=1;
                    $sudah +=1;
                } else {
                    if($row['pilihan']=="calon2"){
                        $c2+=1;
                        $sudah +=1;
                    } else{
                        if($row['pilihan']=="calon3"){
                            $c3+=1;
                            $sudah +=1;
                        } else{
                            $belum+=1;
                        }
                    }
                }
            }
            echo date("H:i");
        ?></h2>
    </div>
    <div class="isi">
        <h3>Total seluruh peserta : <?php echo $total;?> </h3>
        <h3>Total peserta sudah memilih : <?php echo $sudah;?> </h3>
        <h3>Total peserta belum memilih : <?php echo $belum;?> </h3>
        <h3>Total peserta memilih calon 1 : <?php echo $c1;?> </h3>
        <h3>Total peserta memilih calon 2 : <?php echo $c2;?> </h3>
        <h3>Total peserta memilih calon 3 : <?php echo $c3;?> </h3>
    </div>
</body>
</html>