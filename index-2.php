<?php

class User {
	public $nome;
	public $cognome;
	public $sconto = 0;

	public function __construct($_nome, $_cognome)
	{
		$this->nome = $_nome;
		$this->cognome = $_cognome;
	}

	public function setSconto($_eta)
	{
		if($_eta > 65) {
			$this->sconto = 40;
		}
	}

	public function getSconto()
	{
		return $this->sconto;
	}

	protected function getFullName()
	{
		return $this->nome . " " . $this->cognome;
	}
}
	
class Employee extends User
{
	public $livello;

	public function __construct($_nome, $_cognome, $_livello)
	{
		// $this->nome = $_nome;
		// $this->cognome = $_cognome;
		parent::__construct($_nome, $_cognome);
		$this->livello = $_livello;
	}

	public function setLivello($_livello)
	{
		$this->livello = $_livello;
	}

	public function setSconto()
	{
		$this->sconto = $this->livello * 30;
	}

}

$samuele = new Employee("Samuele", "Madrigali", 2);
$samuele->setSconto();
echo "La percentuale di sconto di {$samuele->getFullName()}: " . $samuele->getSconto() . "<br>";

$franco = new User("Franco", "Bianchi");
$franco->setSconto(66);
echo "La percentuale di sconto di {$franco->getFullName()}: " . $franco->getSconto();