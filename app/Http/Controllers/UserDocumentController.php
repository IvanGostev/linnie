<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\DocumentFile;
use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserDocumentController extends Controller
{
    public function documents(User $user) {
        $documents = UserDocument::where('user_id', $user->id)->get();
        return view('user.document.index');
    }
    public function index() {
        $users = User::where('role', 0)->get();
        return view('user.index', compact('users'));
    }
    public function edit(User $user) {
        $documents = UserDocument::where('user_id', $user->id)->get();
        return view('user.edit', compact('user', 'documents'));
    }
    public function update(User $user, Request $request) {

        $data = $request->all();
        if (isset($data['files'])) {
            $files = $data['files'];
        }
        if (isset($files)) {
            foreach ($files as $file) {
                $title = $file->getClientOriginalName();
                $file = Storage::disk('public')->put('/files', $file);
                UserDocument::create(['src' => $file, 'user_id' => $user->id, 'title' => $title]);
            }
        }
        return back();
    }
    public function delete(UserDocument $document)
    {
        $document->delete();
        return back();
    }
}
