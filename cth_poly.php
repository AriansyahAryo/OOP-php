<?php
interface ShapeExmp
{
    public function calcArea();
}

class SquareExmp implements ShapeExmp
{
    private $side;
    public function __construct($side)
    {
        $this->side = $side;
    }

    public function calcArea()
    {
        $area = $this->side * $this->side;
        echo "Area of Square = " . $area;
    }
}
class RectangleExmp implements ShapeExmp
{
    private $widht1;
    private $height1;

    public function __construct($widht1, $height1)
    {
        $this->widht1 = $widht1;
        $this->height1 = $height1;
    }

    public function calcArea()
    {
        $area = $this->widht1 * $this->height1;
        echo "Area of Rectangle : " . $area;
    }
}

class TriangleExmp implements ShapeExmp
{
    private $cons1;
    private $widht1;
    private $height1;

    public function __construct($widht1, $height1, $cons1)
    {
        $this->cons1 = $cons1;
        $this->widht1 = $widht1;
        $this->height1 = $height1;
    }

    public function calcArea()
    {
        $area = $this->cons1 * $this->widht1 * $this->height1;
        echo "Area of Triangle : " . $area;
    }
}

// class CircleExmp implements ShapeExmp
// {
//     private $jari;
//     private $phi;

//     public function __construct($jari, $phi)
//     {
//         $this->jari = $jari;
//         $this->phi = $phi;
//     }

//     public function calcArea()
//     {
//         $area = $this->jari * $this->phi;
//         echo "Area of Circle : " . $area;
//     }
// }

$squ = new SquareExmp(9);
$squ->calcArea();
echo PHP_EOL;
$rec = new RectangleExmp(90, 87);
$rec->calcArea();
echo PHP_EOL;
$rec = new TriangleExmp(10, 90, 87);
$rec->calcArea();
echo PHP_EOL;
// $rec = new TriangleExmp(3, 14, 87);
// $rec->calcArea();
