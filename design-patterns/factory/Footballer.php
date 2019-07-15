<?php 

namespace DesignPatterns\Factory;

use DesignPatterns\Factory\FootballerFactory;
class Footballer
{
	private $footballer;
	private $club;

	public function __construct($footballer, $club)
	{
		$this->footballer = $footballer;
		$this->club = $club;
	}

	public function getFootballer()
	{
		return $this->footballer . ' ' . $this->club;
	}
}