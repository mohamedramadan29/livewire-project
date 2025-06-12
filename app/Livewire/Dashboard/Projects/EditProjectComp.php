<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\dashboard\Category;
use App\Models\dashboard\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProjectComp extends Component
{
    use WithFileUploads;
    public $name, $link,$image,$new_image,$category_id,$description,$categories;
    public $project;

    public $listeners = ['ProjectUpdate'=>'ProjectUpdate'];

    public function mount(){
        $this->categories = Category::all();

    }
    public function ProjectUpdate($id){
        $this->project = Project::findOrFail($id);
        $this->name = $this->project->name;
        $this->link = $this->project->link;
        $this->image = $this->project->image;
        $this->category_id = $this->project->category_id;
        $this->description = $this->project->description;
        $this->resetValidation();
        $this->dispatch('EditModel');
    }
    public function rules(){
        return [
            'name' => 'required',
            'link' => 'required',
            'new_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
        ];
    }
    public function attributes(){
        return [
            'category_id' => 'Category',
        ];
    }
    public function submit(){
        $this->validate($this->rules(),[], $this->attributes());
        ####### Check The Project Have Image  #######
        if($this->new_image){
            unlink($this->project->image);
             ####### Save Image #######
       $imageName = time() . '.' . $this->new_image->getClientOriginalExtension();
       $this->new_image->storeAs('images',$imageName,'public');

       $imagePath = 'storage/images/' . $imageName;
        }

        $this->project->update([
            'name' => $this->name,
            'link' => $this->link,
            'image' => $imagePath ?? $this->project->image,
            'category_id' => $this->category_id,
            'description' => $this->description,
        ]);
        ##### Hide Model ####
        $this->dispatch('EditModel');
        ####### Refresh Compnant In Page
        $this->dispatch('RefreshData')->to(ProjectsDataComp::class);
        ######## Reset Data
        $this->reset(['name', 'link','new_image','category_id','description']);
    }
    public function render()
    {
        return view('dashboard.projects.edit-project-comp');
    }
}
