<?php

namespace App\Http\Controllers;

use App\Models\PreSchool;
use Illuminate\Http\Request;

class PreSchoolController extends Controller
{
    public function index()
    {
        $pre_schools = PreSchool::all();
        return view('admin.pre_schools.index',compact('pre_schools'));
    }
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required|digits:10',
            'state'=> 'required',
            'city'=> 'required',
        ]);
        
        $entity = new PreSchool();
        $entity->name  = $request->name;
        $entity->phone  = $request->phone;
        $entity->state  = $request->state;
        $entity->city  = $request->city;
        $entity->save();
        return redirect()->back();
    }
}
