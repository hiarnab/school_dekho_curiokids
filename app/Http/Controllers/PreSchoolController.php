<?php

namespace App\Http\Controllers;

use App\Models\PreSchool;
use Illuminate\Http\Request;

class PreSchoolController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'phone'=> 'required',
            'state'=> 'required',
            'city'=> 'required',
        ]);
        
        $entity = new PreSchool();
        $entity->name  = $request->name;
        $entity->phone  = $request->phone;
        $entity->state  = $request->state;
        $entity->city  = $request->city;
        $entity->save();
    }
}
