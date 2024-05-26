<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class PeriodAdminController extends Controller
{

    public function index()
    {
        $active = 'settings';
        $periods = Period::all();
        return view('admin.diagnostic.period.index', compact('active', 'periods'));
    }

    public function create()
    {
        $active = 'settings';
        Period::create();
        return back();
    }


    public function show(Period $period)
    {
        $active = 'settings';
        return view('admin.diagnostic.index', compact('active', 'period'));

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

    public function delete(Period $period)
    {
        $period->delete();
        return back();
    }
}
