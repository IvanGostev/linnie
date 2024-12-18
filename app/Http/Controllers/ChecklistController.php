<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\Checklist;
use App\Models\Task;
use App\Models\TaskImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ChecklistController extends Controller
{



    public function index()
    {
        $active = 'settings';
        $checklists = Checklist::where('user_id', auth()->user()->id)->get();
        return view('checklist.index', compact('active', 'checklists'));
    }

    public function tasks(Checklist $checklist)
    {
        $active = 'settings';
        $tasks = Task::where('checklist_id', $checklist->id)->get();
        return view('checklist.task.index', compact('active', 'checklist', 'tasks'));
    }

    public function task(Task $task)
    {
        $active = 'settings';

        return view('checklist.task.show', compact('active', 'task'));
    }

    public function edit(Task $task)
    {
        $active = 'settings';
        return view('checklist.task.edit', compact('active', 'task'));
    }

    public function update(Task $task, Request $request)
    {

        $data = $request->all();
        if (isset($data['images'])) {
            $images = $data['images'];
        }
        unset($data['images']);
        if (isset($images)) {
            foreach ($images as $image) {
                $image = Storage::disk('public')->put('/images', $image);
                TaskImage::create(['src' => $image, 'task_id' => $task->id]);
            }
        }
        $data['status'] = 'Выполнена';
        $task->update($data);
        $users = User::where('role', 2)->get();
        foreach ($users as $user) {
            Notification::create(['user_id' => $user->id, 'task_id' => $task->id, 'type' => 'task', 'name' => auth()->user()->name]);
        }

        return redirect()->route('checklist.index');
    }

}
