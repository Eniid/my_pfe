<?php

namespace App\Http\Livewire;

use App\Models\Event;


use Livewire\Component;

class EventsFilters extends Component
{


    // public $events;
    public $search = '';
    public $order;

    protected $updatesQueryString = [
        'search' => ['except' => '']
    ];

    public function render()
    {
        $events = Event::when($this->search, function ($query, $search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })->get();

        return view('livewire.events-filters', [
            'events' => $events
        ]);
    }
}