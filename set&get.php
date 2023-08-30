<?php

//class
class anime {

    //property
    public $judul;
    public $pencipta;

    
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

$anime1 = new anime;
$anime1->set_judul('One Piece');
echo 'Anime ini berjudul  ' . $anime1->get_judul() . '<br>';
$anime1->set_Pencipta('Echiroo Oda');
echo 'Anime ini Karya  ' . $anime1->get_Pencipta() . '<br>';


$anime2 = new anime;
$anime2->set_judul('Bleach');
echo 'Anime ini berjudul  ' . $anime2->get_judul(). '<br>';
$anime2->set_Pencipta('Tite Kubo');
echo 'Anime ini Karya  ' . $anime2->get_Pencipta().'<br>';
