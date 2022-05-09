<?php
$conn_string = "host=ec2-3-217-251-77.compute-1.amazonaws.com port=5432 dbname=d4tpr606kr69nu user=gjbtjnzueraetk password=499fe98c355e60089883ce1b1a8ee3300ca57dd45b5ed4a2ede7f2141715dc9f";
$conn = pg_connect($conn_string);
$conn
// if($conn) {
//     echo "Koneksi DB Tersambung";
// } else {
//     echo "Koneksi DB GAGAL";
// }
?>
