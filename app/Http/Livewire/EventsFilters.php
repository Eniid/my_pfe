<?php

namespace App\Http\Livewire;
use App\Models\Event;


use Livewire\Component;

class EventsFilters extends Component
{


    public  $events; 
    public $search;

    public function render()
    {
        return view('livewire.events-filters', [
            'events' => Event::where('name', 'like', '%'.$this->search.'%')->latest()->get()
        ]);
    }
}

