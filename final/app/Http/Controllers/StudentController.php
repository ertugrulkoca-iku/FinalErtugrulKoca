<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function ogrencikayitform()
    {
        return view('studentsave');
    }

    function ogrencikayit(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'department' => 'required'
        ]);

        
        $new = new Student();
        $new->name = $request->name;
        $new->surname = $request->surname;
        $new->department = $request->department;
        $save = $new->save();

        if ($save) {
            return back()->with('success', 'successfully');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }

}
