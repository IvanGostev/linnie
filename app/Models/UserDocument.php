<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDocument extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function user() {
        return User::where('id', $this->user_id)->first();
    }
}
