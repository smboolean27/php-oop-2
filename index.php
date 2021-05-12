<?php

class Libro {
	// attributi
	protected $titolo;
	protected $autore;
	protected $isbn;
	protected $prezzo;

	// construttore
	public function __construct($_titolo, $_autore, $_isbn, $_prezzo)
	{
		$this->titolo = $_titolo;
		$this->autore = $_autore;
		$this->isbn = $_isbn;
		$this->prezzo = $_prezzo;
	}

	// metodi 

	public function getTitolo()
	{
		return $this->titolo;
	}

}

class Manuale extends Libro {
	protected $argomento;

	public function __construct($_titolo, $_autore, $_isbn, $_prezzo, $_argomento)
	{
		parent::__construct($_titolo, $_autore, $_isbn, $_prezzo);
		$this->argomento = $_argomento;
	}

	// metodi 

	public function getTitolo()
	{
		return $this->titolo . " - " . $this->isbn;
	}
}

$neuromante = new Libro('Neuromante', 'Gibson', '321-32134-546-32', 12.50);

$php_manuale = new Manuale('PHP MVC', 'Samuele', '321-32134-546-32', 12.50, "Programmazione OOP" );

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Libri</title>
</head>
<body>
	<h2>Libri normali</h2>
	<ul>
		<li><?php echo $neuromante->getTitolo(); ?></li>
	</ul>
	<h2>Libri nerd</h2>

	<ul>
		<li><?php echo $php_manuale->getTitolo(); ?></li>
	</ul>
</body>
</html>