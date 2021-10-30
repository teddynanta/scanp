<?php 

include "conn.php";
session_start();

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
    <h1 class="mt-5">Form Login</h1>
    <div class="container-md mt-3">
        <div class="card card-login mx-auto">
            <div class="card-body">
                <h6 class="card-title">Silahkan masukkan username dan password anda.</h6>
                <form action="" method="POST" class="py-4 mx-auto col-md-9">
                    <div class="mb-4">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" autocomplete="off" aria-describedby="emailHelp"
                            placeholder="username">
                    </div>
                    <div class="mb-4">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="********">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-3">Login</button>
                        <a href="register.php">Belum punya akun? Klik disini.</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <?php 

    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM login WHERE username = '$username'AND password = '$password'";
        $datenow = date('d-m-Y');
        $result = $db->query($query);
        $data = $result->fetchArray();
        $id_user = $data['id_user'];
        
        // var_dump($username);
        // var_dump($password);
        // var_dump($datenow);
        // var_dump($id_user);
        // exit();

        if ($username == $data['username'] && $password == $data['password']) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $id_user;
			echo "<meta http-equiv='refresh' content='0 url=storeddata.php'>";
            $insert = "INSERT INTO activity (id_user, login_date) VALUES ('$id_user', '$datenow')";
            $db->exec($insert);
        }else {
            echo "<script>alert('Username/Password yang anda masukkan salah!')</script>";
        }

    }
    
    ?>








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>