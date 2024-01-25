<?php

namespace App\Http\Controllers;

use App\Models\grade as ModelsGrade;
use Illuminate\Http\Request;

class Grade extends Controller
{
    public function index(){
        $data= ModelsGrade::get();
        return view('grade.index',compact('data'));
    }
    public function store(){
        ModelsGrade::create([
            'simbol'=>request()->input('simbol'),
            'max_speed'=>request()->input('max_speed')
        ]);
        return redirect('grade');
    }
}
