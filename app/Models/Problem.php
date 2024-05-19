<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function images() {
        return ProblemImage::where('problem_id', $this->id)->get();
    }
    public function report() {
        return Report::where('problem_id', $this->id)->first();
    }
    public function reportCount() {
        return Report::where('problem_id', $this->id)->count();
    }
}
