<?php

namespace App\Livewire\Dashboard\Projects;

use App\Models\dashboard\Category;
use App\Models\dashboard\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProjectComp extends Component
{

    use WithFileUploads;


    public $name, $link,$image,$category_id,$description,$categories;

    public function mount(){
        $this->categories = Category::all();
    }
    public function rules(){
        return [
            'name' => 'required',
            'link' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
        ];
    }
    public function attributes(){
        return [
            'category_id' => 'Category',
        ];
    }
    /**
     * Handle the user submitting the form, validate the input, create a new skill and reset the component.
     *
     * @return void
     */
    public function submit(){
        $this->validate($this->rules(),[], $this->attributes());
        ####### Save Image #######
       $imageName = time() . '.' . $this->image->getClientOriginalExtension();
       $this->image->storeAs('images',$imageName,'public');

       $imagePath = 'storage/images/' . $imageName;
        Project::create([
            'name' => $this->name,
            'link' => $this->link,
            'image' => $imagePath,
            'category_id' => $this->category_id,
            'description' => $this->description,
        ]);
        ##### Hide Model ####
        $this->dispatch('AddModel');
        ####### Refresh Compnant In Page
        $this->dispatch('RefreshData')->to(ProjectsDataComp::class);
        ######## Reset Data
        $this->reset(['name', 'link','image','category_id','description']);
    }
    public function render()
    {
        return view('dashboard.projects.add-project-comp');
    }
}
