<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Anda belum login!')</script>";
    echo "<meta http-equiv ='refresh' content='0;
			url =index.php'>";
            exit();
}
session_unset();
session_destroy();
echo "<script>alert('Anda Telah Logout!')</script>";
echo "<meta http-equiv ='refresh' content='0;
			url =index.php'>";
?>