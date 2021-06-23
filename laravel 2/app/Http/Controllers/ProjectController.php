<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;
;

class ProjectController extends Controller
{
    public function index()
    {
    	$projects=Contact::all();
    	return view('projects.index',compact('projects'));
    }

    public function create()
    {
    	return view('projects.create');
    }

    public function store()
    {
    	$project=new Contact();
    	$project->home=request('home');
    	$project->about=request('about');
    	$project->contact=request('contact');
    	$project->save();
    	return redirect('/projects');
    }
}
