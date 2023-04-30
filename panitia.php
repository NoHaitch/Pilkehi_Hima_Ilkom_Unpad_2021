<?php 
    session_start();
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panitia</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a href="../index.html" class="navbar-brand d-flex flex-row align-items-center" aria-label="Logo Website">
                <img class="me-4" src="../src/logo/Logo Hima.png" alt="" srcset="">
                <h6 class="h5 text-light">Hima Humas</h6>
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link text-light me-3 h6">CALON KETUA</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-light me-3 h6">TATA CARA</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Login Box -->
    <main class="container d-flex justify-content-center align-items-center" style="height:93vh;">
        <div class="card rounded-start col-lg-8 d-flex flex-row">
            <div class="col-lg-6">
                <img src="../src/dekorasi/Intersect.png" alt="" class="fluid rounded-start" style="width:100%; height:auto;">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <h3 class="h3">Login Panitia</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off" class="col-lg-12 p-5">
                    <input autocomplete="false" name="hidden" type="text" style="display:none;">
                    <div class="col-lg-12 mb-3 d-flex flex-row">
                        <i class="bi bi-person-circle me-3" style="font-size:1.5rem"></i>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Induk Mahasiswa" class="align-self-stretch" name="username" required>
                    </div>
                    <div class="col-lg-12 mb3 d-flex flex-row">
                        <i class="bi bi-lock me-3" style="font-size:1.5rem"></i>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-secondary col-lg-12 mt-5">Login</button>
                </form>
            </div>
        </div>
    </main>

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./script/cegahpopup.js"></script>
</body>
</html>
<?php 
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $data = mysqli_query($koneksi,"SELECT * FROM panitia");
        foreach($data as $row){
            if($_POST['username']==$row['username'] && $_POST['password']==$row['password']){
                $_SESSION['panitia'] = true;
                header("location:tabeldata.php");
            }
        }
    } 
?>                  