<?php 

include "conn.php";
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Anda belum login!')</script>";
    echo "<meta http-equiv ='refresh' content='0;
			url =index.php'>";
            exit();
}
$query = "SELECT * FROM data";
$result = $db->query($query);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Identifikasi Plat</title>
</head>

<body>
    <h1 class="mt-5">Stored Data</h1>
    <div class="col-md-6 mx-auto mt-5 py-5">
    <a class="btn btn-outline-warning" href="settings.php">settings</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Picture</th>
                    <th scope="col">Plat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php while($data = $result->fetchArray()){ ?>
            <tbody>
                <tr>
                    <td>
                        <img src="<?= $data['images']; ?>" alt="" width="150px">
                    </td>
                    <td>
                        <h4><?= $data['plate_number']; ?></h4>
                    </td>
                    <td><a class="btn btn-primary" href="">edit</a></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>








    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>