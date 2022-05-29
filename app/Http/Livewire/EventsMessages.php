<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EventsMessages extends Component
{

    public  $events; 
    

    public function render()
    {



        return view('livewire.events-messages');
    }
}
