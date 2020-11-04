<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('courses.create');
    }

    public function store()
    {
        request()->validate([
            'name'=>'required',
            'v_link' => 'required',
            'chat',
        ]);
        $data = request();


        auth()->user()->curses()->create([
            'name' => $data['name'],
            'v_link' => $data['v_link'],
            'chat' => $data['chat'],
        ]);
        

        return redirect('profile/' . auth()->user()->id);
    }
}
