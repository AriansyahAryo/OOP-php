<?php
//ini buat class manusia
class manusia
{
    //isi property
    public $goldar;
    // var $warna;
    public $kromosom;
    public function __construct($kromosom, $goldar)
    {
        $this->kromo = $kromosom;
        $this->goldarah = $goldar;

    }

    public function kromos()
    {
        return $this->kromo;
    }

    public function getgoldar()
    {
        return $this->goldarah;
    }

}

$orang1 = new manusia('LLLL', 'C');
echo $orang1->kromos();
echo PHP_EOL;
echo $orang1->getgoldar();
