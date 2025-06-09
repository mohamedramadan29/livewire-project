<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\dashboard\Counter;
use Livewire\Component;

class DeleteCounterComp extends Component
{

    public $counter , $name;
    public $listeners = ['CounterDelete'=>'CounterDelete'];

    public function CounterDelete($id){
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->dispatch('DeleteModel');
    }
    public function submit(){
        $this->counter->delete();
        $this->dispatch('DeleteModel');
        $this->dispatch('RefreshData')->to(CounterDataComp::class);
    }
    public function render()
    {
        return view('dashboard.counters.delete-counter-comp');
    }
}
