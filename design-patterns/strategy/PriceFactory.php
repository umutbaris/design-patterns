<?php

namespace DesignPatterns\Strategy;

class PriceFactory
{
	/**
	 * Get a product method by its ID.
	 *
	 * @param $id
	 * @return PaymentMethod
	 * @throws \Exception
	 */
	public static function getPriceMethod(string $id): PaymentMethod
	{
		switch ($id) {
			case "eshop":
				return new EshopPrice;
			case "cms":
				return new CmsPrice;
			default:
				throw new \Exception("Unknown Payment Method");
		}
	}
}
