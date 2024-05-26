<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function user()
    {
        return User::where('id', $this->user_id)->first();
    }
    public function period()
    {
        return Period::where('id', $this->period_id)->first();
    }
}
