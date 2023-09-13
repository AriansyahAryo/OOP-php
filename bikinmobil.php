<?php 

class desainmobil {

  
    function setjumlahroda($jumlahroda)
    {
        $this->jumlahrodafix= $jumlahroda;
    }
    function setjumlahkursi($jumlahkursi)
    {
        $this->jumlahkursifix= $jumlahkursi;
    }

    function produksimobile()
    {
        echo "Mobile memiliki ".$this->jumlahkursifix."Roda dan ".$this->jumlahkursifix. " Roda";
        echo "<br>";
    }
    function setbak($panjang,$lebar){
        $this->panjangbakfix= $panjang;
        $this->lebarbakfix= $lebar;
        echo "ukuran baknya adalah ". $this->panjangbakfix . "x ". $this->lebarbakfix;
        echo "<br>";
    }
}

$mobil1 = new desainmobil();
$mobil1->setjumlahroda(12);
$mobil1->setjumlahkursi(8);
$mobil1->produksimobile();
$mobil1->setbak(8,19);
