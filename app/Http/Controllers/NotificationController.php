<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentFile;
use App\Models\DocumentImage;
use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;

class NotificationController extends Controller
{

    public function index()
    {
        return view('notification.index');
    }
    public function readAll()
    {
        foreach (notifications() as &$notification) {
            $notification->status = 0;
            $notification->update();
        }
        return back();
    }

}
