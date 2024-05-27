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
    public function reason() {
        return Reason::where('id', $this->reason_id)->first();
    }
    public function reportCount() {
        return Report::where('problem_id', $this->id)->count();
    }
    public function user() {
        $temp = UserProblem::where('problem_id', $this->id)->first();
        return User::where('id', $temp->user_id)->first();
    }
    public function userCreate() {
        return User::where('id', $this->user_id)->first();
    }
}
