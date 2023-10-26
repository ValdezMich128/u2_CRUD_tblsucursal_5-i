<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $ids = $_POST['id_sucursal'];
    $noms = $_POST['nom_sucursal'];
    $calle = $_POST['calle'];
    $ciu = $_POST['ciudad'];
    $nume= $_POST['num_exterior'];
    $telf = $_POST['telefono'];
    $em = $_POST['empleado'];
    $gmail = $_POST['gmail'];
    // query
    $sql = "INSERT INTO sucursal(id_sucursal,nom_sucursal, calle, ciudad, num_exterior, telefono, empleado, gmail)
    VALUES('$ids','$noms', '$calle', '$ciu', '$nume', '$telf', '$em','$gmail')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
