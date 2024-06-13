<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\NoteFile;
use App\Models\NoteImage;
use App\Models\Notification;
use App\Models\Problem;
use App\Models\ProblemImage;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;

class NoteController extends Controller
{

    public function index()
    {
        $notes = Note::where('user_id', auth()->user()->id)->get();
        $active = 'note';
        return view('note.index', compact('notes', 'active'));
    }

    public function create()
    {
        $active = '0';
        return view('note.create', compact('active'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
//        if (isset($data['files'])) {
//            $files = $data['files'];
//        }
//        unset($data['files']);
        $data['user_id'] = auth()->user()->id;
        $note = Note::create($data);
//        if (isset($files)) {
//            foreach ($files as $file) {
//                $title = $file->getClientOriginalName();
//                $file = Storage::disk('public')->put('/files', $file);
//                NoteFile::create(['src' => $file, 'note_id' => $note->id, 'title' => $title]);
//            }
//        }
//        if (isset($images)) {
//            foreach ($images as $image) {
//                NoteFile::create(['src' => Storage::disk('public')->put('/images', $image), 'note_id' => $note->id]);
//            }
//        }
        return redirect()->route('note.index');
    }

    public function edit(Note $note)
    {
        $active = '0';
        return view('note.edit', compact('active', 'note'));
    }
    public function update(Note $note, Request $request)
    {
        $data = $request->all();
        $note->update($data);
        return redirect()->route('note.index');
    }
    public function show(Note $note)
    {
        $active = '0';
        return view('note.show', compact('active', 'note'));
    }

    public function delete(Note $note)
    {
//        $files = NoteFile::where('note_id', $note->id)->get();
//        foreach ($files as $file) {
//            $file->delete();
//        }
//        $images = NoteImage::where('note_id', $note->id)->get();
//        foreach ($images as $image) {
//            $image->delete();
//        }
        $note->delete();
        return back();
    }
}
