<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\dashboard\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsDataComp extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ['RefreshData'=>'$refresh'];


    // To Make Correct Search In Pagination
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $skills = Skill::where('name', 'like', '%' . $this->search . '%')->orderBy('id','desc')->paginate(10);
        return view('dashboard.skills.skills-data-comp', compact('skills'));
    }
}
