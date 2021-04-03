<?php

namespace App\Http\Livewire;

use App\Models\Ship;
use Livewire\Component;

class ShowSpeedbot extends Component
{
    public function render()
    {
        $ship = Ship::first();

        $data = [
            'ship' => $ship,
        ];

        return view('livewire.show-speedbot', $data);
    }
}
