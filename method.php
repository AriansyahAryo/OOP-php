<?php
class Laptop
{
    public $processor;
    public function get_processor()
    {
        return $this->processor;
    }
    public function set_processor($processor)
    {
        $this->processor = $processor;
    }
}

$laptop_otong = new Laptop();
$laptop_otong->set_processor('Intel Pentium');
echo $laptop_otong->get_processor();
