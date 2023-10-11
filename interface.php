<?php
interface Hewan
{
    public function Makan();
    public function Bergerak();
    public function Memahbiak();
}

class Burung implements Hewan
{
    public function Makan()
    {
        return "Burung Makan Mie Limau Kuit" . PHP_EOL;
    }

    public function Bergerak()
    {
        return "Burung Bergerak dengan berjalan, terbang , dan melompat" . PHP_EOL;
    }
    public function Memahbiak()
    {
        return "burung tidak memahbiak";
    }

}

class Sapi implements Hewan
{
    public function Makan()
    {
        return "Sapi makan suket";
    }
    public function Bergerak()
    {
        return "Sapi bergerak didarat";
    }
    public function Memahbiak()
    {
        return "Gaktau memahbiak juga gk sih";
    }

}

$burung = new Burung;
$sapi = new Sapi;

echo "Burung berperilaku : ";
echo PHP_EOL;
echo $burung->Makan();
echo $burung->Bergerak();
echo PHP_EOL;
echo "Sapi berperilaku : ";
echo PHP_EOL;
echo $sapi->Makan();
echo PHP_EOL;
echo $sapi->Bergerak();
echo PHP_EOL;
echo $sapi->Memahbiak();
