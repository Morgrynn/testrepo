<?php

class CartEntry
{

    private $Price;

    private $Quantity;

    public function set_price($value)
    {

        $this->Price = $value;

    }

    public function get_price()
    {

        return $this->Price;

    }

    public function set_quantity($value)
    {

        $this->Quantity = $value;

    }

    public function get_quantity()
    {

        return $this->Quantity;

    }

}

class CartContents
{

    public $items = array();

}

class Order
{

    private $cart;

    private $salesTax;

    public function __construct(CartContents $cart, float $salesTax)
    {

        $this->cart = $cart;

        $this->salesTax = $salesTax;

    }

    public function OrderTotal()
    {

        $cartTotal = 0;

        for ($i = 0; $i < count($this->cart->items); $i++) {

            $cartTotal += $this->cart->items[$i]->get_price() * $this->cart->items[$i]->get_quantity();

        }

        $cartTotal += $cartTotal * $this->salesTax;

        return $cartTotal;

    }

}

$entry1 = new CartEntry();

$entry1->set_price(1.2);

$entry1->set_quantity(120);

$entry2 = new CartEntry();

$entry2->set_price(2.2);

$entry2->set_quantity(200);

$mycart = new CartContents();

$mycart->items = array($entry1, $entry2);

$mytax = 0.2;

$myorder = new Order($mycart, $mytax);

echo $myorder->OrderTotal();