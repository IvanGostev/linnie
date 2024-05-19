<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentImage;
use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{

    public function index()
    {
        $documents = Document::all();
        $active = 'document';
        return view('document.index', compact('documents', 'active'));
    }

    public function create()
    {
        $active = 'document';
        return view('document.create', compact('active'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        if (isset($data['images'])) {
            $images = $data['images'];
        }
        unset($data['images']);
        $document = Document::create($data);
        if (isset($images)) {
            foreach ($images as $image) {
                $image = Storage::disk('public')->put('/images', $image);
                DocumentImage::create(['src' => $image, 'document_id' => $document->id]);
            }
        }

        return redirect()->route('document.index');
    }

    public function show(Document $document)
    {
        $active = 'document';
        return view('document.show', compact('document', 'active'));
    }

}
