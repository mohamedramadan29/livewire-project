<?php

namespace App\Livewire\Dashboard\Settings;

use App\Models\dashboard\Setting;
use Livewire\Component;

class UpdateSettings extends Component
{

    public $settings;


    public function mount(){
        $this->settings = Setting::find(1);

    }
    public function rules(){
        return [
            'settings.name'=>'required|string',
            'settings.email'=>'required|email',
            'settings.phone'=>'required',
            'settings.address'=>'required',
            'settings.facebook'=>'nullable',
            'settings.twitter'=>'nullable',
            'settings.linkedin'=>'nullable',
            'settings.instagram'=>'nullable',
         ];
    }
    public function updateSettings(){

        $this->validate();
        $this->settings->save();

        ######### Use Javascript

     //   flash('Settings Updated Successfully','success');

        session()->flash('success','Settings Updated Successfully');

    }
    public function render()
    {
        return view('dashboard.settings.update-settings');
    }
}
