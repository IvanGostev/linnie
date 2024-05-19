<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProblemController extends Controller
{
    public function index()
    {
        $problems = Problem::where('status', '!=', 'Завершено')->get();
        $active = 'problem';
        return view('home', compact('problems', 'active'));
    }

    public function completed()
    {
        $problems = Problem::where('status', '=', 'Завершено')->get();
        $active = 'problem';
        return view('home', compact('problems', 'active'));
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
        $active = 'problem';
        return view('problem.create', compact('active'));
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
        return view('problem.edit', compact('problem', 'active'));
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
        return redirect()->route('home');
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
