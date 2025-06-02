<?php

namespace App\Livewire\Dashboard\Auth;

use Livewire\Component;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
class AdminLoginComponant extends Component
{
    #[Validate('required|email|string')]
    public $email;
    public $password;
    public $remember;

    public function rules(){
        return [
           /// 'email'=>'required|email|string',
            'password'=>'required',
            'remember'=>'nullable'
        ];
    }
    public function messages(){
        return [
            'email.required'=>' من فضلك ادخل البريد الالكتروني  ',
            'email.email'=>' من فضلك ادخل بريد الكتروني صحيح  ',
            'password.required'=>' من فضلك ادخل كلمة المرور  ',
        ];
    }
    public function submit(){
        $this->validate();
        if(!auth()->guard('admin')->attempt([
            'email'=>$this->email,
            'password'=>$this->password,
        ],$this->remember)){
            throw ValidationException::withMessages([
                'email' => ['The provided credentials do not match our records.'],
            ]);
        }
        return to_route('dashboard.index');
    }
    public function render()
    {
        return view('dashboard.auth.admin-login-componant');
    }
}
