<?php
    include '../classes/database.php';

    $db = new database;

    $aksi =$_GET['aksi'];
    if ($aksi=="tambah"){
        //post karena array asosiatif
        $db->tambah_mhs($_POST ['nim'],$_POST['nama'],$_POST['alamat']);
        header("location : tampil_mhs.php");
    }elseif($aksi=="update"){
        $db->update($_POST['id'], $_POST['nim'],$_POST['nama'], $_POST['alamat'] );
        header("location : tampil_mhs.php");

    }elseif ($aksi=="hapus"){
        $db->hapus($_POST['id']);
        header("location : tampil_mhs.php");
    }