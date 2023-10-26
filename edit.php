<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $ids = $_POST['edit_id_sucursal'];
    $noms = $_POST['edit_nom_sucursal'];
    $calle = $_POST['edit_calle'];
    $ciu = $_POST['edit_ciudad'];
    $nume = $_POST['edit_num_exterior'];
    $telf = $_POST['edit_telf'];
    $em = $_POST['edit_empleado'];
    $gmail = $_POST['edit_gmail'];


    // query
    $sql = "UPDATE sucursal SET id_sucursal='$ids', nom_sucursal='$noms', calle='$calle', ciudad='$ciu', num_exterior='$nume', telefono='$telf',  empleado='$em', gmail='$gmail' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
