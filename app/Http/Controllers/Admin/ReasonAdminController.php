<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Reason;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ReasonAdminController extends Controller
{

    public function index()
    {
        $active = 'settings';
        $reasons = Reason::all();
        return view('admin.reason.index', compact('active', 'reasons'));
    }

    public function create()
    {
        $active = 'settings';
        return view('admin.reason.create', compact('active'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Reason::create($data);
        return redirect()->route('admin.reason.index');
    }

    public function edit(Reason $reason)
    {
        $active = 'settings';
        return view('admin.reason.edit', compact('active', 'reason'));
    }

    public function update(Reason $reason, Request $request)
    {
        $data = $request->all();
        $reason->update($data);
        return redirect()->route('admin.reason.index');
    }

    public function delete(Reason $reason)
    {
        $reason->delete();
        return redirect()->route('admin.reason.index');
    }
}
