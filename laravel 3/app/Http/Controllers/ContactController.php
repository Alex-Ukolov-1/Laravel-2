<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\User;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

     public function store()
    {
        $project=new user();
        $project->name=request('name');
        $project->email=request('email');
        $project->email_verified_at=request('email_verified_at');
        $project->password=request('password');
        $project->save();
        return redirect('/hellow');
    }
}
