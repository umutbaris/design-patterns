<?php
namespace DesignPatterns\Strategy;
use DesignPatterns\Strategy\Prodcut;
interface StrategyInterface {
	public function getPrice(Product $product);
}
