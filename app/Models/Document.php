<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function images() {
        return DocumentImage::where('document_id', $this->id)->get();
    }
}
