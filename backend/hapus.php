<?php
include('./../sys/connection.php');

$sql = "delete from laptop where id='" . $_GET['id'] . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);
if($row == 1) {
    echo '<script type="text/javascript">';
    echo 'alert("Data telah terhapus");';
    echo 'window.location.href = "./../index.php";';
    echo '</script>';
}
?>