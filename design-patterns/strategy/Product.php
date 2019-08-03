<?php

class Prodcut 
{
	public function getProduct()
	{
		$product = [ 
		'designPattern'  => 'FACTORY',
		'productId' => $this->getId, 
		'productName' => $this->getClub,
		'productPrice' => $this->getPrice,
	];

	return json_encode($product, true); 
	}
}