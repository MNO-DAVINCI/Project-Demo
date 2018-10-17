<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', ['projects' => Project::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'description' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect('projects/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $project = new Project();
            $project->name = $request->input('name');
            $project->description = $request->input('description');
            $project->save();
        }
        return redirect('projects')->with('success', 'Project has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $rules = array(
            'name' => 'required',
            'description' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->action('ProjectController@edit', ['id' => $project->id])
                ->withErrors($validator)
                ->withInput();
        } else {
            $project->name = $request->input('name');
            $project->description = $request->input('description');
            $project->save();
        }
        return redirect('projects')->with('success', 'Project has been edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        try {
            $project->delete();
            return redirect('projects')->with('success', 'Project has been deleted!');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('projects')->withErrors('Failed to delete project, it still has students attached.');
        }

    }
}
