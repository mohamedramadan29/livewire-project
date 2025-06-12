<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\dashboard\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsDataComp extends Component
{
    use WithPagination;
    public $search;

    public $listeners = ['RefreshData'=>'$refresh'];
    public function updatedSearch(){
        $this->resetPage();
    }
    public function render()
    {
        $projects = Project::where('name', 'like', '%' . $this->search . '%')->orderBy('id','desc')->paginate(10);
        return view('dashboard.projects.projects-data-comp',compact('projects'));
    }
}
