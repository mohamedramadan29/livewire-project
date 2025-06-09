<?php

namespace App\Livewire\Dashboard\Counters;

use App\Models\dashboard\Counter;
use Livewire\Component;

class AddCounterComp extends Component
{
    public $name , $count , $icon;

    public function rules(){
        return[
            'name'=>'required|string',
            'count'=>'required|numeric',
            'icon'=>'required',
        ];
    }

    public function messages(){
        return[

            'name.required'=>' من فضلك ادخل العنوان  ',
            'name.string'=>' ادخل العنوان بشكل صحيح  ',

        ] ;
    }

    public function submit(){
        $this->validate();
        $counter = new Counter();
        $counter->name = $this->name;
        $counter->count = $this->count;
        $counter->icon = $this->icon;
        $counter->save();
        $this->dispatch('AddModel');
        $this->dispatch('RefreshData')->to(CounterDataComp::class);
        $this->reset(['name', 'count', 'icon']);
    }

    public function render()
    {
        return view('dashboard.counters.add-counter-comp');
    }
}
