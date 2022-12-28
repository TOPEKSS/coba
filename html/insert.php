<?php

include('connection.php');

$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$age = $_POST['age'];

$insert = mysqli_query($connect, "INSERT INTO struktur SET name1='$name1', name2='$name2', email='$email', pass='$pass', tgl='$tgl', alamat='$alamat', jenis_kelamin='$jenis_kelamin', age='$age'");

if ($insert) 
    header('Location: tables-basic.php');
else
    echo 'Input data gagal';  
mysqli_close($connect);

 