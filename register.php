<?php 

include "conn.php";
session_start();
$query = "SELECT * FROM login";

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Identifikasi Plat</title>
</head>

<body>
    <h1 class="mt-5">Form Registrasi</h1>
    <div class="container-md mt-3">
        <div class="card card-register mx-auto">
            <div class="card-body">
                <h6 class="card-title">Silahkan isi dengan data diri anda.</h6>
                <form action="" method="POST" class="py-4 mx-auto col-md-9">
                    <div class="mb-3">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" id="name" name="username" placeholder="Username Anda....">
                    </div>
                    <div class="mb-3">
                        <label for="ttl">Tempat Tanggal Lahir</label>
                        <input type="date" name="date" class="form-control" id="ttl">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="********">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3">Buat Akun</button>
                        <a href="index.php">Sudah punya akun? Login sekarang.</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <?php 
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $date = $_POST['date'];
        $password = $_POST['password'];
        $datenow = date('d-m-Y');
        $status = 1;
        
        $query = "INSERT INTO login (username, password, date_of_birth, date_created, status) VALUES('$username', '$password', '$date', '$datenow', '$status') ";
        
        // var_dump($username);
        // var_dump($status);
        // var_dump($date);
        // var_dump($password);
        // var_dump($datenow);
        // var_dump($query);
        // exit();

        if ($db->exec($query)) {
            echo "<script>alert('Akun anda telah berhasil dibuat!')</script>";
        }else {
            echo "<script>alert('Informasi yang anda masukkan salah!')</script>";
        }
    }
    
    ?>








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>