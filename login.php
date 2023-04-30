<?php 
    session_start();
    if(isset($_SESSION['login'])){
        header("location:vote.php");
    }else{
        $_SESSION['password']="";
    }
    include "koneksi.php";
    ob_start( );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="../styles/style.css">
	<link rel="stylesheet" href="./reset.css">
	<link rel="stylesheet" href="./hotfix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
        
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./script/cegahpopup.js"></script>

    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg bg-primary sticky-top">
        <div class="container">
            <!-- Brand Website -->
            <a href="index.html" class="navbar-brand d-flex flex-row align-items-center" aria-label="Logo Website">
                <img class="me-4" src="../src/logo/Logo Hima.png" alt="" srcset="">
                <h6 class="h5 text-light">Hima Humas Unpad</h6>
            </a>

            <!-- Tombol Toggle Saat Mobile Resolution -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list text-light"></i>
            </button>

            <!-- Navlink -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav col-lg-12 d-flex flex-lg-row justify-content-lg-end">
                    <li class="nav-item">
                        <button type="button" class="nav-link text-light h6 me-3" data-bs-toggle="modal" data-bs-target="#tataCara" style="background:none;border:none;">TATA CARA</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal Tata Cara -->
    <div class="modal fade" id="tataCara" tabindex="-1" role="dialog" aria-labelledby="tataCaraLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tataCaraLabel">Tata Cara Pemilu</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="background:none;border:none;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <main id="tataCara">
                        <div class="container d-flex flex-column align-items-center justify-content-center py-5">
                            <div class="d-flex flex-column col-lg-12">
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Langkah Pertama</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-1.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Kenali calon-calon ketua himpunan dengan menekan tulisan "Lihat Profil" di bawah nama calon.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Langkah Kedua</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-1.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Tekan tombol "login" di bagian kanan atas layar untuk menuju ke halaman login.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Langkah Ketiga</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-2-rev.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Masukkan data yang telah diberikan melalui email ke dalam kolom NPM dan 
                                                    password, pastikan data yang dimasukkan sudah benar, lalu tekan login.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Langkah Keempat</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-3.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Jika sudah yakin, tekan foto calon yang Anda pilih (akan ditandai dengan 
                                                    garis berwarna hijau), lalu tekan tombol kirim suara.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Jika Berhasil,</h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="../src/tatacara/langkah-4-rev.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Jika proses berjalan dengan lancar akan muncul halaman seperti ini.
                                                </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-4 mx-5 my-5">
                                        <div class="card" style="width:100%">
                                            <div class="card-header">
                                                <h5 class="card-title text-center">Jika Gagal,</h5>
                                            </div>
                                            <div class="card-body">
                                                
                                                <img src="../src/tatacara/langkah-5-rev.png" alt="" style="width:100%;height:auto;">
                                                <p class="card-text mt-3">
                                                    Jika gagal akan muncul halaman seperti ini. Segera hubungi panitia agar masalah diperbaiki.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Box -->
    <main class="position-relative">
        
        <!-- SVG Background -->
        <div class="svg-desktop">
            <img src="../src/svg/desktop-main-top.svg" alt="" class="col-lg-4 col-6 position-absolute svg-top">
            <img src="../src/svg/desktop-main-bot.svg" alt="" class="col-lg-4 col-6 position-absolute svg-bot bottom-0">
        </div>

        <!-- Login -->
        <main class="container d-flex justify-content-center align-items-center" style="height:93vh;">
            <div class="card rounded-start col-lg-10 d-flex flex-row">
                <div class="col-lg-6 d-lg-block d-none">
                    <img src="../src/logo/preview.jpg" alt="" class="fluid rounded-start" style="width:100%; height:auto;">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center py-4">
                    <h3 class="h3">Halaman Login</h3>
                    <form action="<?php echo $_SERVER['PHP)SELF']; ?>" method="POST" autocomplete="off" class="col-lg-12 col-12 p-5">
                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                        <div class="col-lg-12 mb-3 d-flex flex-row">
                            <i class="bi bi-person-circle me-3" style="font-size:1.5rem"></i>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="usernameHelp" placeholder="Nomor Pokok Mahasiswa" class="align-self-stretch" required>
                        </div>
                        <div class="col-lg-12 mb3 d-flex flex-row">
                            <i class="bi bi-lock me-3" style="font-size:1.5rem"></i>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-secondary col-lg-12 col-12 mt-5 text-light">Login</button>
                    </form>
                    <h6 class="h6 text-danger">
                        <?php 
                            if($_SERVER["REQUEST_METHOD"]=="POST"){
                                $statustb = mysqli_query($koneksi,"SELECT * FROM panitia");
                                $temp=0;
                                foreach($statustb as $status){
                                    $currentdate = date_create();
                                    $datebuka = date_create($status['buka']);
                                    $datetutup = date_create($status['tutup']);
                                    if($status['status']==1){
                                        if($currentdate > $datebuka && $currentdate < $datetutup){
                                            $data = mysqli_query($koneksi,"SELECT * FROM tabeldata");
                                            foreach($data as $row){
                                                if($row['username']==$_POST['username']){
                                                    $temp += 1;
                                                    if($row['password']==$_POST['password']){
                                                        $_SESSION['login'] = true;
                                                        $_SESSION['id'] = $row['id'];
                                                        $_SESSION['nama'] = $row['nama'];
                                                        $_SESSION['password'] = $row['password'];
                                                        if($row['pilihan']!=""){
                                                            $_SESSION['sukses'] = true;                                             
                                                        }

                                                        header("location:https://pemray.himahumas.xyz/vote.php");
                                                        ob_flush( );
                                                        exit;              
                                                    }
                                                    else{
                                                        echo "Username atau password Anda salah";
                                                        exit;
                                                    }
                                                }
                                            }
                                            if($temp==0){
                                            echo "Username atau password Anda salah";
                                            }
                                        }else{
                                            echo "Pemilihan masih ditutup";
                                        }
                                    }else{
                                        echo "Pemilihan masih ditutup";
                                    }
                                }
                            }
                        ?>
                    </h6>
                </div>
            </div>
        </main>
    </main>

</body>
</html>

