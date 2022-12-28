<?php

include('connection.php');

$id = $_POST['id'];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$age = $_POST['age'];

$update = mysqli_query($connect, "UPDATE struktur SET name1='$name1', name2='$name2', email='$email', pass='$pass', tgl='$tgl', alamat='$alamat', jenis_kelamin='$jenis_kelamin', age='$age' WHERE id='$id'");

if ($update)
    header('location: tables-basic.php ');
else
    echo 'Update data gagal';  
    ?> 