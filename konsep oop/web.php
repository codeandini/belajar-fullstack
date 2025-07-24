<?php
class product
{
    public $name;
    public $price;
    public $description;

    public function _construct($name, $price, $description)

    {
        $this ->name = $name;
        $this ->price = $price;
        $this ->description = $description;
    }
}

$product1 = new product('smartphone', '5000000', 'smartphone terbaru dengan kamera berkualitas tinggi' );