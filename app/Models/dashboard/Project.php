<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function Category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
