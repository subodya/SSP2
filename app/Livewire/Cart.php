<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart as CartModel;

class Cart extends Component
{
    public $cartItems = [];

    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->cartItems = CartModel::with('product', 'product.subCategory')
                ->where('user_id', $user->id)
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.cart', [
            'cartItems' => $this->cartItems,
        ]);
    }
}