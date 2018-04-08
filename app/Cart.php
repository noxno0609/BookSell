<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if($oldCart != null)
        {
            $this->items = $oldCart->items;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id) 
    {
        $addedItem = ['quantity' =>0, 'price' => $item->price, 'item' =>$item];

        if($this->items)
        {
            if(array_key_exists($id, $this->items))
            {
                $addedItem = $this->items[$id];
            }
        }

        $addedItem['quantity']++;
        $addedItem['price'] = $item->price * $addedItem['quantity'];
        
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
        $this->items[$id] = $addedItem;
    }

    public function remove($id) 
    {
        $addedItem = ['quantity' =>0, 'price' => 0, 'item' => null];
        if(array_key_exists($id, $this->items))
        {
            $addedItem = $this->items[$id];
        }
        
        $this->totalQuantity-= $addedItem['quantity'];
        $this->totalPrice -=  $addedItem['price'];

        unset($this->items[$id]);
    }
}
