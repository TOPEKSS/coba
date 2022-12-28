<?php

include('connection.php');

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM struktur WHERE id='$id'");

if ($delete)
    header('location: tables-basic.php');
else
    echo 'Delete data gagal';