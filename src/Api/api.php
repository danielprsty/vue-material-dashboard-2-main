<?php
include "db.php";
if (isset($_SERVER['HTTP_ORIGIN'])) {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 1000');
}
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
    }

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
        header("Access-Control-Allow-Headers: Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");
    }
    exit(0);
}
$res = array('error' => false);
$action = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
if ($action == "login") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "Select * from admin where username ='$username' AND password ='$password'";

    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        $res['message'] = "Login Successfuly";
    } else {
        $res['error'] = true;
        $res['message'] = "Your Login Username or Password is invalid";
    }
}
if ($action == "save") {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $minat = $_POST['minat'];
    $nilai = $_POST['nilai'];
    $psikotes = $_POST['psikotes'];

    $sql = "INSERT INTO `student`(`id`,`name`,`class`) VALUES(NULL,'$name','$class')";
    $result = $conn->query($sql);
    if ($result === true) {
        $res['error'] = false;
        $res['message'] = "Data Tersimpan";
    } else {
        $res['error'] = true;
        $res['message'] = "Data Gagal Tersimpan";
    }
}

if ($action == "save_jurusan") {
    $name = $_POST['name'];
    $prioritas1 = $_POST['prioritas1'];
    $prioritas2 = $_POST['prioritas2'];
    if($prioritas1 >= $prioritas2){
        $sql = "INSERT INTO `jurusan`(`id`,`name`,`jurusan`) VALUES(NULL,'$name','IPS')";
        $result = $conn->query($sql);
    }else if($prioritas1 <= $prioritas2){
        $sql = "INSERT INTO `jurusan`(`id`,`name`,`jurusan`) VALUES(NULL,'$name','IPA')";
        $result = $conn->query($sql);
    }
    if ($result === true) {
        $res['error'] = false;
        $res['message'] = "Data Tersimpan";
    } else {
        $res['error'] = true;
        $res['message'] = "Data Gagal Tersimpan";
    }
}

if ($action == "delete"){
    $id = $_POST['id'];
    $sql = "DELETE FROM `student` WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result === true) {
        $res['error'] = false;
        $res['message'] = "Data Tersimpan";
    } else {
        $res['error'] = true;
        $res['message'] = "Data Gagal Tersimpan";
    }
}

if ($action == "update") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    
    $sql = "UPDATE `student` SET `name` = '$name',`class` = '$class' WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result === true) {
        $res['error'] = false;
        $res['message'] = "Data Terupdate";
    } else {
        $res['error'] = true;
        $res['message'] = "Data Gagal Terupdate";
    }
}

if ($action == "getstudent") {
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    $studentData = array();
    if ($num > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($studentData, $row);
        }
        $res['error'] = false;
        $res['student_Data'] = $studentData;
    } else {
        $res['error'] = false;
        $res['message'] = "No Data Found!";
    }
}

if ($action == "getjurusan") {
    $sql = "SELECT * FROM jurusan";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    $jurusanData = array();
    if ($num > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($jurusanData, $row);
        }
        $res['error'] = false;
        $res['jurusan_Data'] = $jurusanData;
    } else {
        $res['error'] = false;
        $res['message'] = "No Data Found!";
    }
}

if ($action == "getkriteria") {
    $sql = "SELECT * FROM kriteria";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    $kriteriaData = array();
    if ($num > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($kriteriaData, $row);
        }
        $res['error'] = false;
        $res['kriteria_Data'] = $kriteriaData;
    } else {
        $res['error'] = false;
        $res['message'] = "No Data Found!";
    }
}

$conn->close();
header("Content-type: application/json");
echo json_encode($res);
die();
