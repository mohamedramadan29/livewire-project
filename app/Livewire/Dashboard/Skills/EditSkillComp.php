<?php

namespace App\Livewire\Dashboard\Skills;

use Livewire\Component;
use App\Models\dashboard\Skill;

class EditSkillComp extends Component
{

    public $skill, $name , $progress;

    public $listeners = ['SkillUpdate' => 'SkillUpdate'];

    public function SkillUpdate($id){
        $this->skill = Skill::find($id);
        $this->name = $this->skill->name;
        $this->progress = $this->skill->progress;
        $this->resetValidation();
        ######## Show Edit Model
        $this->dispatch('EditModel');
    }

    public function rules(){
        return [
            'name' => 'required',
            'progress' => 'required|numeric|min:0|max:100',
        ];
    }
    public function submit(){
        $this->validate();
        $this->skill->update([
            'name' => $this->name,
            'progress' => $this->progress,
        ]);
        $this->dispatch('EditModel');
        $this->dispatch('RefreshData')->to(SkillsDataComp::class);
        $this->reset(['name', 'progress']);
    }

    public function render()
    {
        return view('dashboard.skills.edit-skill-comp');
    }
}
