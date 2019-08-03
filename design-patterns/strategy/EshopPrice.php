<?php

namespace DesignPatterns\Strategy;

class EshopPrice implements \StrategyInterface
{
	public function getPrice() 
	{
		//price request to service and get price
		$price = 100;

		return $price;
	}
}
