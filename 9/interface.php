<?php

interface Audible
{
	public function makeSound();
}

interface Switchable
{
	public function turnOn();
	public function turnOff();
}


//



//
class Computer implements Switchable,Audible
{
	public function turnOn()
	{
		echo "Computer turned on";
	}
	public function turnOff()
	{
		echo "Computer turned off";
	}
	public function makeSound()
	{
		echo "Computer made sound";
	}
}

class Cat implements Audible
{
 public function makeSound()

{
	echo "Cat made sound";
}
}
$computer = new Computer();
$cat = new Cat();
$computer->makeSound();
$cat->makeSound();