<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function show(Request $request, Project $id)
    {
        if($id->exists)
        {
            // dd(Project::find($id->id));
            return new ProjectResource($id);
        }else {
            return new ProjectCollection(Project::all());
        }
    }
}
