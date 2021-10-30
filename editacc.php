<?php 

include "conn.php";
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Anda belum login!')</script>";
    echo "<meta http-equiv ='refresh' content='0;
			url =index.php'>";
            exit();
}
$id = $_SESSION['id'];
$query = "SELECT * FROM login WHERE id_user = '$id'";
$result = $db->query($query);
$data = $result->fetchArray();

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
    <h1 class="mt-5">Form Edit Data</h1>
    <div class="container-md mt-3">
        <div class="card card-register mx-auto">
            <div class="card-body">
                <h6 class="card-title">Silahkan isi dengan data diri anda.</h6>
                <form action="" method="POST" class="py-4 mx-auto col-md-9">
                    <div class="mb-3">
                        <label for="name">Username</label>
                        <input type="text" class="form-control" name="username" id="name" value="<?= $data['username']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ttl">Tempat Tanggal Lahir</label>
                        <input type="date" class="form-control" name="date" value="<?= $data['date_of_birth']; ?>" id="ttl">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" id="password" value="<?= $data['password']; ?>">
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mb-2">Edit</button>
                        <button type="reset" class="btn btn-danger d-block mx-auto mb-2">Cancel</button>
                        <a href="settings.php" class="btn btn-outline-primary mx-auto mb-2">Back</a>
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

        $update = "UPDATE login SET username = '$username', password='$password', date_of_birth = '$date' WHERE id_user = '$id'";

        if ($db->exec($update)) {
            echo "<script>alert('Data berhasil diubah!')</script>";
            echo "<meta http-equiv='refresh' content='0 url=editacc.php'>";
        }else {
            echo "<script>alert('Data gagal diubah!')</script>";
        }
        
    }
    
    ?>








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>