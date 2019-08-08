<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Resources\Project as ProjectResource;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function show($id)
    {
        return new ProjectResource(Project::find($id));
    }
}
