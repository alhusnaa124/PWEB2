<?php
    //membuat class manusia

    class manusia{
        //properti
        public $nama_saya;
        private $alamat_saya ;
        protected $umur_saya;

        //membuat function panggil nama
        public function panggil_nama($saya){
            $this->nama_saya=$saya;
        }
        public function panggil_alamat($alamat){
            $this->alamat_saya=$alamat;
        }
        public function panggil_umur($umur){
            $this->umur_saya=$umur;
        }
        //getter method
        public function alamat(){
            return $this->alamat_saya;
        }
    }

    //membuat class turunan mahasiswa dari manusia
    class mahasiswa extends manusia
    {
        public $nama_mahasiswa;
        private $nim;

        function panggil_mahasiswa ($mahasiswa){
            $this->nama_mahasiswa=$mahasiswa;
        }
        public function umur(){
            return $this->umur_saya;
        }
        
    
    }

    $informatika = new mahasiswa();

    $informatika->panggil_nama("Husnaaaa");
    $informatika->panggil_mahasiswa("kurnia");
    $informatika->panggil_alamat("kebumen");
    $informatika->panggil_umur("19");
    

    echo "nama depan " . $informatika->nama_saya . "<br/>";
    echo "nama belakang " . $informatika->nama_mahasiswa . "<br/>";
    //error karena alamat bersifat privat
    echo "Alamat " . $informatika->alamat();
    echo "Umur " . $informatika->umur();
    
