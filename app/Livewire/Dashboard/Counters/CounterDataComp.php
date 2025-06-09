<?php

namespace App\Livewire\Dashboard\Counters;

use Livewire\Component;
use App\Models\dashboard\Counter;

class CounterDataComp extends Component
{

    public $search;

    public $listeners = ['RefreshData'=>'$refresh'];

    public function render()
    {
        $counters = Counter::where('name','like','%'.$this->search.'%')->orderby('id','desc')->paginate(10);
        return view('dashboard.counters.counter-data-comp',compact('counters'));
    }
}
