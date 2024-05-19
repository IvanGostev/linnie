<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index()
    {
        $active = 'settings';
        return view('admin.index', compact('active'));
    }


}
