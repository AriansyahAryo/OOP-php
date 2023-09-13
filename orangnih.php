<?php 

class Orang {
    public $age = 49;
    public $name;
    public $pekerjaan;

    function getAge(){
       return  $this->age;
    }


}

$orang1 = new Orang;
echo PHP_EOL;
$orang1->name="Anton Wibowo";
echo "Salam FLOSSS by " . $orang1->name;
echo PHP_EOL;
echo "Orang berusia " . $orang1->getAge() . " Tahun keknya"; 
echo PHP_EOL;

$orang2 = new Orang;
echo PHP_EOL;
$orang2->name="Oyra";
echo "Watashi wa " . $orang2->name;
echo PHP_EOL;
echo "Maouuu SAAMAAAAA ke  " . $orang2->getAge() . " HOHOHOHOHOHOHO"; 
echo PHP_EOL;

$orang3 = new Orang;
echo PHP_EOL;
$orang3->name="YUUSHA";
echo "KIMMII NOOO NAWAAA DAREEEEEE " . $orang3->name;
echo PHP_EOL;
$orang3->pekerjaan="JADI PENYELAMAT DUNIA ISEKAI";
echo "Pekerjaaanya adalah berpetualang " . $orang3->pekerjaan;