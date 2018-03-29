<?php
namespace Namespaces;
class Item extends Product 
{
    private $memory;
    public function setMemory($memory)
    {
      $this->memory = $memory;
      return $this;
    }
    public function getMemory()
    {
      return $this->memory; 
    }
}
