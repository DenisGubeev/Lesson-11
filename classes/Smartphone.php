<?php
namespace Namespaces;

interface SmartphoneInterface
{
    public function areYouRich();
}
trait SmartphoneTrait
{
    // кхм-кхм
    public function areYouRich()
    {
        if ($this->model == 'android') return false;
        return true;
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
