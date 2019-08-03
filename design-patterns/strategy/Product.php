<?php
namespace DesignPatterns\Strategy;
use DesignPatterns\Strategy\PriceFactory;
class Product 
{
	public function getProduct()
	{
		$id = "eshop";
		$product = [ 
		'designPattern'  => 'FACTORY',
		'productId' => 'id', 
		'productName' => 'name',
		'productPrice' => $this->getPrice($id),
		];

		return $product;
	}

	public function getPrice($id)
	{

		$priceFactory = new PriceFactory;
		$paymentMethod = $priceFactory->getPriceMethod($id);

	}
}

//$init = Product::getProduct();