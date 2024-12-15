<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\Checklist;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ChecklistAdminController extends Controller
{

    public function index()
    {
        $active = 'settings';
        $checklists = Checklist::all();
        $users = User::all();
        return view('admin.checklist.index', compact('active', 'users'));
    }

    public function main(User $user)
    {
        $active = 'settings';
        $checklists = Checklist::where('user_id', $user->id)->get();
        return view('admin.checklist.main', compact('active', 'checklists', 'user'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        Checklist::create($data);
        return redirect()->back();
    }
    public function storeTask(Request $request)
    {
        $data = $request->all();
        Task::create($data);
        return redirect()->back();
    }
    public function tasks(Checklist $checklist)
    {
        $active = 'settings';
        $tasks = Task::where('checklist_id', $checklist->id)->get();
        return view('admin.checklist.task.index', compact('active', 'checklist', 'tasks'));
    }
    public function create()
    {
        $active = 'settings';
        return view('admin.checklist.create', compact('active'));
    }
    public function task(Task $task)
    {
        $active = 'settings';

        return view('admin.checklist.task.show', compact('active', 'task'));
    }

    public function edit(Checklist $checklist)
    {
        $active = 'settings';

        return view('admin.checklist.edit', compact('active', 'checklist'));
    }

    public function update(Checklist $checklist, Request $request)
    {

        $data = $request->all();
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }

        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        $checklist->update($data);
        return redirect()->route('admin.checklist.index');
    }

    public function delete(Checklist $checklist)
    {

        $checklist->delete();
        return redirect()->route('admin.index');
    }
}
