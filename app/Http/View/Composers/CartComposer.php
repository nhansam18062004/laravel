<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class CartComposer
{
    public function compose(View $view)
    {
        $userId = Auth::id();
        $cart = session()->get("cart_$userId", []);
        $tongsoluong = array_sum(array_column($cart, 'quantity'));

        $view->with('cartTotalQuantity', $tongsoluong);
    }
}
