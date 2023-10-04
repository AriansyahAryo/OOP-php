<?php

class Komputer
{
    public $merk;
    public $processor;
    public $memory;
    public function beli_komputer()
    {
        return "Beli komputer Baru";
    }

}

class lepy extends Komputer
{
    public function lihat_spec()
    {
        return "merk : $this->merk, processor : $this->processor, memory : $this->memory";
    }
}

$lepyBaru = new lepy();
echo PHP_EOL;
$lepyBaru->merk = "Lenovo";
$lepyBaru->processor = "intel i5";
$lepyBaru->memory = "16 GB";

echo $lepyBaru->beli_komputer();
echo PHP_EOL;
echo $lepyBaru->lihat_spec();
