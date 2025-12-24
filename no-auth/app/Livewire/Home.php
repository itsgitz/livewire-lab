<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Home extends Component
{
    public $title = "Livewire Lab";

    #[Title("Home")]
    public function render()
    {
        return view("livewire.home");
    }
}
