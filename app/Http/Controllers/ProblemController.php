<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Reason;
use App\Models\Report;
use App\Models\User;
use App\Models\UserProblem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProblemController extends Controller
{
    public function index()
    {
        $active = 'problem';
        if (auth()->user()->role == 2) {
            $problems = Problem::where('status', '!=', 'Завершено')->get();

        } else {
            $problems = Problem::where('status', '=', 'Новая')->orWhere('status', '=', 'Простой')->get();
        }
        return view('home', compact('problems', 'active'));
    }

    public function completed(Request $request)
    {

        $active = 'problem';
        $users = User::where('role', 1)->get();
        if (isset($request->user_id)) {
            $temp = Report::where('user_id', $request->user_id)->get('problem_id');
            $problems = Problem::whereIn('id', $temp)->get();
            $userActive = User::where('id', $request->user_id)->first();
        } else {
            $problems = Problem::where('status', '=', 'Завершено')->get();
            $userActive = 0;
        }
        return view('completed', compact('problems', 'active', 'users', 'userActive'));
    }

    public function search(Request $request)
    {
        $problems = Problem::where('status', '=', 'Завершено')->where('title', 'LIKE', '%' . $request->search . '%')
            ->orWhere('text', 'LIKE', '%' . $request->search . '%')
            ->get();
        $active = 'problem';
        return view('home', compact('problems', 'active'));
    }

    public function create()
    {
        $active = '0';
        $reasons = Reason::all();
        return view('problem.create', compact('active', 'reasons'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $images = $data['images'];
        unset($data['images']);
        $data['user_id'] = auth()->user()->id;
        $problem = Problem::create($data);
        if (isset($images)) {
            foreach ($images as $image) {
                $image = Storage::disk('public')->put('/images', $image);
                ProblemImage::create(['src' => $image, 'problem_id' => $problem->id]);
            }
        }

        return redirect()->route('home');
    }

    public function edit(Problem $problem)
    {
        $active = 'problem';
        $reasons = Reason::all();
        return view('problem.edit', compact('problem', 'active', 'reasons'));
    }
    public function show(Problem $problem)
    {
        $active = 'problem';
        return view('problem.show', compact('problem', 'active'));
    }
    public function work(Problem $problem)
    {
        $problem->status = 'В работе';
        $problem->update();
        UserProblem::create(['user_id' => auth()->user()->id, 'problem_id' => $problem->id]);
        return redirect()->route('profile.edit', auth()->user()->id);
    }
    public function update(Problem $problem, Request $request)
    {
        $data = $request->all();
        if (isset($data['images'])) {
            $images = $data['images'];
        }
        unset($data['images']);
        $problem->update($data);
        if (isset($images)) {
            $oldImages = ProblemImage::where('problem_id', $problem->id)->get();
            foreach ($oldImages as $oldImage) {
                $oldImage->delete();
            }
            foreach ($images as $image) {
                $image = Storage::disk('public')->put('/images', $image);
                ProblemImage::create(['src' => $image, 'problem_id' => $problem->id]);
            }
        }
        return redirect()->route('profile.edit', auth()->user()->id);
    }

    public function delete(Problem $problem)
    {
        if (!Report::where('problem_id', $problem->id)->count > 0) {
            $images = ProblemImage::where('problem_id', $problem->id)->get();
            foreach ($images as $image) {
                $image->delete();
            }
            $problem->delete();
        }
        return redirect()->route('home');
    }
}
