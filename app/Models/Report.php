<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function images() {
        return ReportImage::where('report_id', $this->id)->get();
    }
    public function problem() {
        return Problem::where('id', $this->problem_id)->first();
    }
}
