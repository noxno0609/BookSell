<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Session;
use App\Cart;

class ShoppingCartController extends Controller
{
    //
    public function index()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);

        $items = $cart->items;
        $totalPrice = $cart->totalPrice;

        return view('shoppingcart', compact('cart', 'items', 'totalPrice'));
    }

    public function addtocart($id)
    {
        $book = Book::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($book, $book->id);

        Session::put('cart', $cart);

        return redirect('home');
    }

    public function removefromcart($id)
    {
        $book = Book::find($id);

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->remove($book->id);

        Session::put('cart', $cart);

        return redirect('shoppingcart');
    }
}
