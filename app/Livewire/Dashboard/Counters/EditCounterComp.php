<?php

namespace App\Livewire\Dashboard\Counters;

use Livewire\Component;
use App\Models\dashboard\Counter;

class EditCounterComp extends Component
{
    public  $counter,$name , $count , $icon;

    public $listeners  = ['CounterUpdate'=>'CounterUpdate'];
    public function CounterUpdate($id){
        $this->counter = Counter::find($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;
        $this->resetValidation();
        $this->dispatch('EditModel');
    }

    public function rules(){
        return [
            'name' => 'required',
            'count' => 'required|numeric|min:0|max:100',
            'icon' => 'required',
        ];
    }
    public function submit(){
        $this->validate();
        $this->counter->update([
            'name' => $this->name,
            'count' => $this->count,
            'icon' => $this->icon,
        ]);
        $this->dispatch('EditModel');
        $this->dispatch('RefreshData')->to(CounterDataComp::class);
    }
    public function render()
    {
        return view('dashboard.counters.edit-counter-comp');
    }
}
