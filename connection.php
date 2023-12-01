
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unit";

$connection = mysqli_connect($servername,$username,"",$dbname);
if (mysqli_connect_errno()) {
    die("Check connection !". mysqli_connect_error());
}

?>