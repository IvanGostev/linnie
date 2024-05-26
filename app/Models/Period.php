<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $guarded = false;
    public function diagnostics() {
        return Diagnostic::where('period_id', $this->id)->get();
    }
    public function users() {
        $users = User::where('role', 0)->get();
        foreach ($users as &$user) {
            if (Diagnostic::where('period_id', $this->id)->where('user_id', $user->id)->count() > 0) {
                $user['diagnostic'] = Diagnostic::where('period_id', $this->id)->where('user_id', $user->id)->first();
            } else {
                $user['diagnostic'] = 0;
            }
        }
        return $users;
    }
}
