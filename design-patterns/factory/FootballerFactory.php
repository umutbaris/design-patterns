<?php

namespace DesignPatterns\Factory;

use DesignPatterns\Factory\Footballer;

class FootballerFactory
{
	public static function create($footballer, $club)
	{
		return new Footballer($footballer, $club);
	}
}