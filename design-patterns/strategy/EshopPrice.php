<?php

namespace DesignPatterns\Strategy;

class EshopPrice implements StrategyInterface
{
	public function getPrice(Product $product) 
	{
		//price request to database and get price
		$price = 200;

		return $product;
	}
}
