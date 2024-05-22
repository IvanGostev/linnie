<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReportController extends Controller
{

    public function create(Problem $problem)
    {
        return view('report.create', compact('problem'));
    }

    public function store(Problem $problem,Request $request)
    {

        $data = $request->all();
        if (isset($data['images'])) {
            $images = $data['images'];
        }
        unset($data['images']);
        $data['user_id'] = auth()->user()->id;
        $data['problem_id'] = $problem->id;
        $problem->status = 'Завершено';
        $problem->update();
        $report = Report::create($data);
        if (isset($images)) {
            foreach ($images as $image) {
                $image = Storage::disk('public')->put('/images', $image);
                ReportImage::create(['src' => $image, 'report_id' => $report->id]);
            }
        }

        return redirect()->route('home');
    }

    public function show(Problem $problem)
    {
        $report = Report::where('problem_id', $problem->id)->first();
        return view('report.show', compact('report', 'problem'));
    }

}
