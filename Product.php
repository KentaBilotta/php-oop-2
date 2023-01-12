<?php

class Product {
    private string $id;
	private string $name;
	private string $category;
	private string $description;
	private int $availableStartMonth;
	private int $availableEndMonth;
	private int $availableQty;
	private int $price;

    public function __construct($id) {
         // dati del prodotto presi dal database
    }

    public function getPrice()
	{
		return $this->price;
	}

    public function decrementAvailableQty()
	{
		$this->availableQty--;
		return $this;
	}

    public static function getAll() {
		
	}
}