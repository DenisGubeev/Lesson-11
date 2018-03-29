<?php

namespace Namespaces;

interface ProductInterface
{
    public function isFood();
    public function discount();
    public function deliveryPrice();
    public function totalPrice();
}
abstract class Product implements ProductInterface
{
    protected $title;
    protected $price;
    protected $type;
    protected $weight;
   
    public function __construct($title, $price, $type, $weight)
    {
        $this->title = $title;
        $this->price = $price;
        $this->type = $type;
        $this->weight = $weight;
    }
    
    public function discount()
    {
        $isFood = $this->isFood();
        $foodWeight = $this->weight;
        if (($isFood && $foodWeight > 10) || (!$isFood)) return $this->price*0.1;
        return 0;
    }
    
    public function isFood()
    {
        return $this->type == 'food';
    }
    // Цена доставки
    public function deliveryPrice()
    {
        $discount = $this->discount();
        if ($discount > 0) return 300;
        return 250;
    }
    // Цена с учетом цены доставки и скидки
    public function totalPrice()
    {
        return $this->price - $this->discount() + $this->deliveryPrice();
    }
?>
