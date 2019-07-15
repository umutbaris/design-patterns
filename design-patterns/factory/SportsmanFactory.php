<?php

namespace DesignPatterns\Factory;

use DesignPatterns\Factory\Footballer;

class SportsmanFactory
{
	public static function create($footballer, $club)
	{
		return new Footballer($footballer, $club);
	}
}