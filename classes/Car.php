<?php

namespace Namespaces;

interface CarInterface
{
    public function setColor($color);
    public function getColor();
}
class Car extends Product implements CarInterface
{
    private $color;
    public function setColor($color)
    {
      $this->color = $color;
      return $this;
    }
    public function getColor()
    {
        return $this->color;
    }
	
}
?>
