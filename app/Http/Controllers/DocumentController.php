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
        if (isset($data['images'])) {
            $images = $data['images'];
        }
        unset($data['images']);
        $document = Document::create($data);
//        if (isset($images)) {
//            foreach ($images as $image) {
//                $image = Storage::disk('public')->put('/images', $image);
//                DocumentImage::create(['src' => $image, 'document_id' => $document->id]);
//            }
//        }

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
    public function createFile(Document $document)
    {
        return view('document.file', compact('document'));
    }
    public function storeFile(Document $document, Request $request)
    {
        $data['src'] = $request->src;
        $data['title'] = $request->title;
        if(isset($data['src']))  {
            $data['src'] = Storage::disk('public')->put('/images', $data['src']);
        }
        $data['document_id'] = $document->id;
        DocumentFile::create($data);
        return redirect()->route('document.edit', $document->id);
    }


    public function deleteFile(DocumentFile $file)
    {
        $file->delete();
        return back();
    }

}
