<?php
$conn_string = "hostdb.com port=5432 dbname=xxxxxxx user=xxxxx password=xxxx";
$conn = pg_connect($conn_string);
$conn
// if($conn) {
//     echo "Koneksi DB Tersambung";
// } else {
//     echo "Koneksi DB GAGAL";
// }
?>
