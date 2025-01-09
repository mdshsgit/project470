<?php

// app/Http/Controllers/WorkspaceController.php

namespace App\Http\Controllers;


use App\Models\Group; // Make sure to import the Group model

class WorkspaceController extends Controller
{
    public function index()
    {
        // Retrieve all groups from the database
        $groups = Group::all();

        // Return the view with the groups data
        return view('workspace', compact('groups'));
    }
}
