<?php
    //membuat class mahasiswa
    class mahasiswa{
        //membuat properti public
        public $nama;
        private $nim = "220302025";
        public function tampil_nama(){
            return " Nama saya Husnaa <br/>";
        }
        //membuat method protected
         function tampil_nim(){
            return " NIM saya " .$this->nim;
        }
    }
    //intansiasi objek ke dalam variable $mahasiswa
    $mahasiswa = new mahasiswa();
    $nim = new mahasiswa();
    //memanggil method tampil nama
    echo $mahasiswa->tampil_nama();
    echo "<br/>";
    echo $nim->tampil_nim();