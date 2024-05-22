<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function edit(User $user)
    {
        $active = 'profile';
        return view('profile.edit', compact('user', 'active'));
    }

    public function update(User $user, Request $request)
    {

        $data = $request->all();
        if(isset($data['img']))  {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        $user->update($data);
        return back();
    }
}
