<?php
$conn =  new mysqli("localhost","root","","db_siswa");
if (!$conn) {
    echo "Error! DB Not Found";
}
