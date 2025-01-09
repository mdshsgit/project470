<?php

// app/Http/Controllers/GroupController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;


class GroupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'group_name' => 'required|string|max:255',
            'group_description' => 'required|string',
        ]);

        Group::create([
            'name' => $request->group_name,
            'description' => $request->group_description,
        ]);

        return redirect()->back()->with('success', 'Group created successfully!');
    }

    public function index()
    {
        // Retrieve all groups from the database
        $groups = Group::all();

        // Pass the groups to the view
        return view('workspace', compact('groups'));
    }

    public function show($id)
    {
        $group = Group::findOrFail($id);

        return view('groups.show', compact('group'));
    }
    public function leave(Group $group)
    {
        // Assuming you have a many-to-many relationship between users and groups
        auth()->user()->groups()->detach($group->id);

        return redirect()->route('workspace')->with('status', 'You have left the group.');
    }
}
