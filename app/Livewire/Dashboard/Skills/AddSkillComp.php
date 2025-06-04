<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\dashboard\Skill;
use Livewire\Component;

class AddSkillComp extends Component
{


    public $name, $progress;
    public function rules(){
        return [
            'name' => 'required',
            'progress' => 'required|numeric|min:0|max:100',
        ];
    }
    /**
     * Handle the user submitting the form, validate the input, create a new skill and reset the component.
     *
     * @return void
     */
    public function submit(){
        $this->validate();
        Skill::create([
            'name' => $this->name,
            'progress' => $this->progress,
        ]);
        ##### Hide Model ####
        $this->dispatch('AddModel');
        ####### Refresh Compnant In Page
        $this->dispatch('RefreshData')->to(SkillsDataComp::class);
        ######## Reset Data
        $this->reset(['name', 'progress']);
    }
    public function render()
    {
        return view('dashboard.skills.add-skill-comp');
    }
}
