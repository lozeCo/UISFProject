<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Resources\ProjectCollection;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function show(Request $request, Project $id)
    {
        if($id->exists)
        {
            return new ProjectCollection(Project::find($id));
        }else {
            return new ProjectCollection(Project::all());
        }
    }
}
