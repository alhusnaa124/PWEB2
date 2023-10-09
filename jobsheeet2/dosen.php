<?php
    class dosen{
        //membuat properti
        var $nidn;
        var $nama;
        var $prodi;

        //method
        function tampil_nidn (){
            
        }
        function tampil_nama (){
            return "Nama saya adalah husnaa";
        }
        function tampil_prodi (){

        }
    }

    $nama_dosen = new dosen;

    echo $nama_dosen->tampil_nama();