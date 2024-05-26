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
        $active = '0';
        return view('document.create', compact('active'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        if (isset($data['files'])) {
            $files = $data['files'];
        }
        unset($data['files']);
        $document = Document::create($data);
        if (isset($files)) {
            foreach ($files as $file) {
                $title = $file->getClientOriginalName();
                $file = Storage::disk('public')->put('/files', $file);
                DocumentFile::create(['src' => $file, 'document_id' => $document->id, 'title' => $title]);
            }
        }

        return redirect()->route('document.index');
    }

    public function edit(Document $document)
    {
        $active = '0';
        return view('document.edit', compact('active', 'document'));
    }
    public function show(Document $document)
    {
        $active = '0';
        return view('document.show', compact('active', 'document'));
    }

    public function delete(Document $document)
    {
        $files = DocumentFile::where('document_id', $document->id)->get();
        foreach ($files as $file) {
            $file->delete();
        }
        $document->delete();
        return back();
    }
}
