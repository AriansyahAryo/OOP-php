<?php 

class MobilBaru {
    public $namamobil;

    public function set_namamobil($namamobil){
        $this->namamobil = $namamobil;
    }
    public function get_namamobil(){

        return $this->namamobil;
    }
    }

$mobil = new MobilBaru;
$mobil->set_namamobil('Sedan');
echo "Mobil ini bernama ". $mobil->get_namamobil();


