<?php

namespace App\Livewire\Dashboard\Skills;

use Livewire\Component;
use App\Models\dashboard\Skill;
use App\Livewire\Dashboard\Skills\SkillsDataComp;

class DeleteSkillComp extends Component
{

    public $skill , $name;
    public $listeners = ['SkillDelete'];

    public function SkillDelete($id){
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        ####### Show model To Confirm Delete
        $this->dispatch('DeleteModel');
    }
    public function submit(){
        $this->skill->delete();
        ######## Reset Data
        $this->reset(['skill', 'name']);
        ##### Hide Model ####
        $this->dispatch('DeleteModel');
        ####### Refresh Compnant In Page
        $this->dispatch('RefreshData')->to(SkillsDataComp::class);
    }
    public function render()
    {
        return view('dashboard.skills.delete-skill-comp');
    }
}
