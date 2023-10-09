<?php
    //membuat class
        class mahasiswa {
            //properti
           var $nim;
           var $nama;
           var $alamat;
    
             //method
        function __construct(){
            echo " Saya Mahasiswa Teknik Informatika";
            echo " <br/>";
        }
        function __destruct(){
            echo " politeknik negeri cilacap";
        }   
        function tampil_nama (){
            //jika akan menampilkan data maka perlu return
            return " Nama Saya adalah husnaa <br/>";
            
        }

        function tampil_mahasiswa(){
            return " Saya tidak akan menjadi joki atau menggunakan jasa joki sampai lulus <br/>";
        }
        function tampil_alamat (){
    
        }
        }
    
      
        //objek
        $nama_mahasiswa = new mahasiswa;
        
    
        //menammpilkan 
        echo $nama_mahasiswa->tampil_nama();
        echo $nama_mahasiswa->tampil_mahasiswa();