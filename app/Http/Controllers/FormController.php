<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request){
        $form = new Form();
        $form->name=$request->name;
        $form->number=$request->number;
        $form->comment=$request->comment;
        $form->save();
    }

    public function index(){
        $form=Form::all();
        return view('table',compact('form'));
    }
}
