<?php
// src/Game/GuessNumberBundle/Entity/Number.php
namespace Game\GuessNumberBundle\Entity;

class Number
{
	protected $number;

	public function getNumber()
	{
		return $this->number;
	}
	public function setNumber($number)
	{
		$this->task = $number;
	}

}