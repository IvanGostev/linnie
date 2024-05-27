<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnostic;
use App\Models\Period;
use App\Models\User;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DiagnosticAdminController extends Controller
{

    public function index()
    {
        $active = 'settings';
        $period = Period::latest()->first();
        return view('admin.diagnostic.index', compact('active', 'period'));
    }

    public function create(User $user, Period $period)
    {
        $active = 'settings';

        return view('admin.diagnostic.create', compact('active', 'user', 'period'));
    }
    public function show(Diagnostic $diagnostic)
    {
        $active = 'settings';

        return view('admin.diagnostic.show', compact('active', 'diagnostic'));
    }
    public function pdf(Diagnostic $diagnostic)
    {
        $active = 'settings';
        $diagnostic['user'] = $diagnostic->user()->toArray();
        $diagnostic['period'] = $diagnostic->period()->toArray();
        $pdf = PDF::loadView('admin.diagnostic.pdf', ['diagnostic' => $diagnostic->toArray()]);
        return $pdf->download('diagnostic.pdf');
    }

    public function store(User $user, Period $period, Request $request)
    {

        $data = $request->all();
        foreach ($data as &$element) {
            if ($element == 'on') {
                $element = 1;
            }
        }
        $data['user_id'] = $user->id;
        $data['period_id'] = $period->id;
        Diagnostic::create($data);
        return redirect()->route('admin.diagnostic.index');
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

    public function delete(Diagnostic $diagnostic)
    {
        $diagnostic->delete();
        return back();
    }
}
