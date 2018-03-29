<?php 

namespace Namespaces;
class Basket implements ArrayAccess 
{
	public $order = [];
	public function offsetSet($index, $product)
	{
		if (is_null($index)) {
			$this->order[] = $product;
		} else {
			$this->data[$index] = $product;
		}
	}
	public function offsetGet($index)
	{
		return isset($this->order[$index]) ? $this->order[$index] : null;
	}
	public function offsetExists($index)
	{
		return isset($this->order[$index]);
	}
	public function offsetUnset($index)
	{
		unset($this->order[$index]);
	}
	public function getOrderPrice()
	{
		$totalPrice = 0;
		foreach($this->order as $product) {
			$totalPrice = $totalPrice + $product->getPrice();
		}
		return $totalPrice;
	}
}
