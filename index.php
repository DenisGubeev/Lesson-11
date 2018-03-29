<?php
function myNamespacesAutoloader($className)
{
	$filePath = $className . 'classes/*.php';
	
	if (file_exists($filePath))  {
		include "$filePath";
	} else {
		echo 'Такого класса нет';
	}
}
spl_autoload_register('myNamespacesAutoloader');
$audi = new \Namespaces\Car('audi', 100000);
$volvo = new \Namespaces\Car('volvo', 70000);
echo '<br>----------<br>';
$audi->setColor('red');
echo $audi->getColor();
echo '<br>----------<br>';
$tvLG = new \Namespaces\TV('LG', 30000);
$tvLG->setResolution('4K');
$tvLG->setDiagonal("98''");
echo $tvLG->getPrice();
echo "<br>";
echo $tvLG->getDiagonal();
echo '<br>----------<br>';
$penParker = new \Namespaces\Pen('Parker ', 2000);
$penParker->setCollection(' Jotter ')
    ->setColor(' red ');
echo $penParker->getTitle();
echo $penParker->getPrice();
echo $penParker->getCollection();
echo $penParker->getColor();
echo '<br>----------<br>';
$itemApple = new \Namespaces\Item('Apple Ipone 7S', 20000);
$itemApple->setMemory(64);
echo $itemApple->getTitle();
echo '<br>';
echo $itemApple->getMemory();
echo '<br>----------<br>';
$basket = new \Namespaces\Basket();
$basket[] = $audi;
$basket[] = $penParker;
$basket[] = $itemApple;
echo '<br>';
print_r($basket);
echo '<br>';
echo 'order = ' . $basket->getOrderPrice();
