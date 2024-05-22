<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserAdminController extends Controller
{

    public function index()
    {
        $active = 'settings';
        $users = User::all();
        return view('admin.user.index', compact('active', 'users'));
    }

    public function create()
    {
        $active = 'settings';

        return view('admin.user.create', compact('active'));
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect()->route('admin.user.index');
    }


    public function edit(User $user)
    {
        $active = 'settings';

        return view('admin.user.edit', compact('active', 'user'));
    }

    public function update(User $user, Request $request)
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
        $user->update($data);
        return redirect()->route('admin.user.index');
    }

    public function delete(User $user)
    {

        $user->delete();
        return redirect()->route('admin.index');
    }
}
