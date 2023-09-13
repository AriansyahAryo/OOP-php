<?php 

class laptop {
    // isi property buat kelas laptop
    public $pemilik;
    public $merk;
    public $ukuran_layar;
    public $tipe;

    // method buat manipulasi class laptop
    function hidupkan_laptop(){
        return "Hidupkan Laptop latopnya dihidupkan";
    }

    function matikan_laptop(){
        return "matikan laptop";
    }

    function install_ulang(){
        return "Laptopnya masih error lagi diinstall ulang njer";
    }

}

//ini buat objek dari class laptop(instansiasi)
$laptop_aryo = new laptop();
echo $laptop_aryo->hidupkan_laptop();
$laptop_aryo->pemilik="HAYSNAIRA";
echo PHP_EOL;
// echo $laptop_aryo->pemilik;
// menset nilai dari object laptop aryo
$laptop_aryo->merk="King Lenovo";
$laptop_aryo->ukuran_layar="1800px";
echo PHP_EOL;
echo $laptop_aryo->pemilik;
echo PHP_EOL;
echo $laptop_aryo->merk;
echo PHP_EOL;
echo $laptop_aryo->ukuran_layar;
echo PHP_EOL;
$laptop_aryo->tipe="Laptop Ideapad";
echo $laptop_aryo->tipe;
echo PHP_EOL;
//ini buat manipulasi object nya laptop cahyo
echo PHP_EOL;
$laptop_cahyo = new laptop();
echo $laptop_cahyo->matikan_laptop();
echo PHP_EOL;
$laptop_cahyo->pemilik="Cahyo Purba";
echo $laptop_cahyo->pemilik;
echo PHP_EOL;
$laptop_cahyo->merk="ASU S";
echo $laptop_cahyo->merk;
echo PHP_EOL;
$laptop_cahyo->ukuran_layar="40em";
echo $laptop_cahyo->ukuran_layar;
echo PHP_EOL;
echo $laptop_cahyo->install_ulang();
echo PHP_EOL;
$laptop_cahyo->tipe="Laptop X";
echo $laptop_cahyo->tipe;