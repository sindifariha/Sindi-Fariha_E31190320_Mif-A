<?php 
abstract class Car{
	// Abstarct classes can have properties
	protected $tankVolume;

	// Abstract Clases can have non abstract methods
	public function setTnkVolume($volume)
	{
		$this -> tankVolume = $volume;
	}

	// Abstarct method
	abstract public function calcNumMilesOnfullTank();
}
?>