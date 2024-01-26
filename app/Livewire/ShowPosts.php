<?php

namespace App\Livewire;

use App\Models\Console;
use App\Models\User;
use Livewire\Component;


class ShowPosts extends Component
{

    public $search;
    public function render()
    {
        $consoles = Console::where('manufacturer', 'like', '%' . $this->search . '%')->get();
       
        return view('livewire.show-posts' , compact('consoles') );


        /**
         * V2.0           v3.0
         * wire:model == wire:model.live
         * 
         * wire:model.lazy == wire:model
         */
    }
}
