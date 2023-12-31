<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

// #[Title('Counter')]
class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter')->title('Counter aaa');
    }
}
