<?php
// src/Game/GuessNumberBundle/Entity/Number.php
namespace Game\GuessNumberBundle\Entity;

class Number
{
	protected $number;
	protected $random;
	

	public function getNumber()
	{
		return $this->number;
	}
	public function setNumber($number)
	{
		$this->task = $number;
	}
	public function getRandom()
	{
		return $this->random;
	}
	public function setRandom($random)
	{
		$this->task = $random;
	}

}