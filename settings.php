<?php 

session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Anda belum login!')</script>";
    echo "<meta http-equiv ='refresh' content='0;
			url =index.php'>";
            exit();
}
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
    <h1 class="mt-5">Settings</h1>
    <div class="container-md mt-3">
        <div class="card card-login mx-auto">
            <div class="card-body col-md-9 mx-auto my-5 py-5">
                <div class="mb-4 d-grid gap-2">
                    <a href="editacc.php" class="btn btn-outline-primary">Edit Account</a>
                </div>
                <div class="mb-5 d-grid gap-2">
                    <a href="storeddata.php" class="btn btn-outline-primary">Stored Data</a>
                </div>
                <div class="text-center">
                    <a href="logout.php" class="btn btn-danger mx-auto mb-3">Logout</a>
                </div>
            </div>
        </div>

    </div>








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>