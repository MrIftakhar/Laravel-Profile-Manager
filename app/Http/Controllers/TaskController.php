<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'bio' => 'required',
            'hobbies' => 'required',
            'date_of_birth' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('task_images', 'public');
        }

        Task::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
            'hobbies' => $request->hobbies,
            'date_of_birth' => $request->date_of_birth,
            'image_path' => $path,
        ]);


        return redirect()->route('dashboard')->with('success', 'Task added!');
    }
    public function edit($id)
    {
        $task = Task::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $task = Task::where('id', $id)->where('user_id', auth()->id())->firstOrFail();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'bio' => 'required',
            'hobbies' => 'required',
            'date_of_birth' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $path = $task->image_path;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('task_images', 'public');
        }

        $task->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'bio' => $request->bio,
            'hobbies' => $request->hobbies,
            'date_of_birth' => $request->date_of_birth,
            'image_path' => $path,
        ]);

        return redirect()->route('dashboard')->with('success', 'Task updated!');
    }

    public function destroy($id)
    {
        $task = Task::where('id', $id)->where('user_id', auth()->id())->firstOrFail();
        $task->delete();
        return redirect()->route('dashboard')->with('success', 'Task deleted!');
    }

}

