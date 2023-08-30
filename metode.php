<?php

//class
class anime {

    //property
    public $judul = 'Nardog';
    public $pencipta = 'M. Kishimoto';

    //Metode
    public function judul_anime (){
        echo 'Anime ini Berjudul' . $this->judul;

    }

    public function pencipta_anime (){
        return $this->pencipta;
        // ini untuk mengembalikan nama penciptanya
    }
    // untuk mengembalikan nilai

}

$anime1 = new anime;
$anime1->judul_anime();
echo $anime1->pencipta_anime();
// var_dump($); 