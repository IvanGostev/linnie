<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function files() {
        return DocumentFile::where('document_id', $this->id)->get();
    }
    public function extension() {
        if (DocumentFile::where('document_id', $this->id)->count() > 0) {
            return explode('.', DocumentFile::where('document_id', $this->id)->first()->src)[1];
        }
        return 'txt';
    }
}


