<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Grade(){
        return $this->hasMany(train::class,'grade_id');
    }
}
