<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function create()
    {

        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        // $data = $request->all();

        // $newCharacter = Character::create($data);

        // return redirect()->route('characters.index');
    }

    public function edit(Project $project)
    {

        // return view('characters.edit', compact('character'));
    }

    public function update(Request $request, Project $project)
    {
        // $data = $request->all();
        // $character->update($data);

        // return redirect()->route('characters.show', $character->id);
    }

    public function destroy(Project $project)
    {

        // $character->delete();

        // return redirect()->route('characters.index');
    }
}
