<?php

namespace DesignPatterns\Strategy;

class CmsPrice implements \StrategyInterface
{

	public function getPrice() 
	{
		//price request to database and get price
		$price = 200;

		return $price;
	}
}
