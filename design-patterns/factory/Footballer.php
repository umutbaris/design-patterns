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
	$footballer = [ 'designPattern'  => 'FACTORY',
					'footballerName' => $this->footballer, 
					'clubName' => $this->club 
				];
	
	return json_encode($footballer, true);
	}
}
