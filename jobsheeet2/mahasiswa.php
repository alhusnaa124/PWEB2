<?php
//membuat class
    class mahasiswa {
        //properti
       var $nim;
       var $nama;
       var $alamat;

         //method
    function tampil_nama (){
        //jika akan menampilkan data maka perlu return
        return " Nama Saya adalah husnaa";
    }
    function tampil_alamat (){

    }
    }

  
    //objek
    $nama_mahasiswa = new mahasiswa;
    

    //menammpilkan 
    echo $nama_mahasiswa->tampil_nama();