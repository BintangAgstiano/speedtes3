<?php

namespace App\Http\Controllers;

use App\Models\grade;
use App\Models\train as ModelsTrain;
use Illuminate\Http\Request;

class Train extends Controller
{
    public function index(){
        $data= array(
            'query' => ModelsTrain::get(),
            'queryGrade' => grade::get()
        ); 
        return view('train.index',compact('data'));
    }
    public function store(){
        ModelsTrain::create([
            'grade_id'=>request()->input('grade_id'),
            'name'=>request()->input('name')
        ]);
        return redirect('train');
    }
}
