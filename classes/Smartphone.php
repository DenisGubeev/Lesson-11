<?php
namespace Namespaces;

interface SmartphoneInterface
{
    public function getMemory();
}
trait SmartphoneTrait
{
    // кхм-кхм
    public function setMemory()
    {
      $this->memory = $memory;
      return $this;
    }
}
class Smartphone extends Product implements SmartphoneInterface
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
?>
