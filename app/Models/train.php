<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class train extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Trains(){
        return $this->belongsTo(grade::class,'grade_id');
    }
}
