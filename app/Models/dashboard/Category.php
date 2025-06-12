<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function Project(){
        return $this->hasMany(Project::class,'category_id');
    }
}
