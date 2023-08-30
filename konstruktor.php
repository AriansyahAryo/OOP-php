<?php

class anime {

    //property
    public $judul;
    public $pencipta;
    public $status;


    // public function __construct()
    // {
    //     echo 'AKU ADALAH CLASS ANIME YG DIPANGGIL DIKONSTRUKTOR';
    // }

    // // Konstruktor
    // public function __construct($judul, $pencipta)
    // {
        
    // }




    // metode get dan set
    public function set_judul($judul){
        $this->judul= $judul;
    }

    public function get_judul(){
        return $this->judul;
    }

    public function set_Pencipta($pencipta){
        $this->pencipta= $pencipta;
    }

    public function get_Pencipta(){
        return $this->pencipta;
    }

}