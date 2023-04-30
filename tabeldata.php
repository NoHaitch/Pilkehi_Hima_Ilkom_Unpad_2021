<?php 
    session_start();
    if($_SESSION['panitia']!=true){
        header("location:panitia.php");
    }
    include "koneksi.php";
    header("refresh:60");
    date_default_timezone_set("Asia/Jakarta");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabeldata</title>
    <link rel="stylesheet" href="./styles/tabeldata/tabeldata.css">
</head>
<body>
    <?php 
        $dbpanit = mysqli_query($koneksi,"SELECT * FROM panitia");
        foreach($dbpanit as $rowpanit){}
    ?>
    <div class="lain">
    <h1> Status Voting : 
        <?php 
            if($rowpanit['status']==1){
                echo "<span id='buka'>Dibuka</span>";
            } else{
                echo "<span id='tutup'>Ditutup</span>";
            }
        ?>
    </h1>
    <h3><span>Status ini hanya status sampingan yang bisa dikontrol tapi jika waktu</span></h3>
    <h3><span>sudah melewati batas pemilihan maka ditutupnya voting tidak akan terlihat pada status ini</span></h3>
    <br>
    <h2><?php echo date("H:i") ?></h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="text" style="display:none" name="gstatus" id="gstatus">
            <button type="button" onclick="gantistatus(1)">Buka Voting</button>
            <button type="button" onclick="gantistatus(0)">Tutup Voting</button>
            <button type="submit" id="statusbtn" style="display:none"></button>
    </form>
    <h3><span>Sebelum</span> dan <span>Sesudah </span>mengganti status, mohon refresh dahulu</h3>
    <h3>agar mencegah konflik pergantian status</h3>
    <br><a href="hasil.php">Lihat Hasil Pemilihan</a>
    </div>
    <div class="table">
        <table>
            <tr>
                <th class='id'>ID</th>
                <th class='nama'>Nama</th>
                <th class='username'>NIM</th>
                <th class='password'>Password</th>
                <th class='email'>Email</th>
                <th class='status'>Status</th>
                <th class='keterangan'>Keterangan</th>
            </tr>
            <?php 
                $data = mysqli_query($koneksi,"SELECT * FROM tabeldata");
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td class='id'>".$row['id']."</td>";
                    echo "<td class='nama'>".$row['nama']."</td>";
                    echo "<td class='username'>".$row['username']."</td>";
                    echo "<td class='password'>".$row['password']."</td>";
                    echo "<td class='email'>".$row['email']."</td>";
                    echo "<td class='status'>";
                        if($row['pilihan']!=""){
                            echo "Sudah";
                        } else{ echo "Belum";}
                    echo"</td>";
                    echo "<td class='keterangan'><button type='button' onclick='edit(".$row['id'].")'>Lihat</button></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    <form action="detail.php" method="POST">
            <input type="text" style="display:none" name="id" id="editid">
            <button type="submit" id="editbtn" style="display:none"></button>
    </form>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
    <script src="./script/tabeldata.js"></script>
</body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if($_POST['gstatus']==1){
            mysqli_query($koneksi,"UPDATE panitia SET `status`=1");
        }
        else{
            mysqli_query($koneksi,"UPDATE panitia SET `status`=0");
        }
        header("refresh");
    }

?>