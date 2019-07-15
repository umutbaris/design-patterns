<?php 

namespace DesignPatterns\Factory;


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

$ronaldo = SportsmanFactory::create('Ronaldo', 'Juventus');
print_r($ronaldo->getFootballer());