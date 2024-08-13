<?php

namespace App\Livewire;

use Livewire\Component;

class QuantityCounter extends Component
{
    public $quantity = 1;
    public $price=0;
    public $totalPrice;
    public $vatRate = 0.25;

    public function mount($price)
    {
        $this->price = $price;
        $this->totalPrice = $this->price;
    }

    public function increment()
    {
        $this->quantity++;
        $this->updateTotalPrice();
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
            $this->updateTotalPrice();
        }
    }

    public function updateTotalPrice()
    {
        $subtotal = $this->quantity * $this->price;
        $vat = $subtotal * $this->vatRate;
        $this->totalPrice = $subtotal + $vat;
    }
    public function render()
    {
        return view('livewire.quantity-counter');
    }
}
