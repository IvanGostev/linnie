<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = false;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function checklistCount() {
        return Checklist::where('user_id', $this->id)->count();
    }
    public function problemIds() {
        return UserProblem::where('user_id', $this->id)->get('id');
    }
    public function workProblems() {
       return Problem::whereIn('id', $this->problemIds())->where('status', 'В работе')->get();
    }
    public function completedProblems() {
        return Problem::whereIn('id', $this->problemIds())->where('status', 'Завершено')->get();
    }
    public function myProblems() {
        return Problem::where('user_id', $this->id)->where('status', 'Завершено')->get();
    }
    public function documents() {
        return UserDocument::where('user_id', $this->id)->get();
    }
    public function diagnostic($period_id) {
        return Diagnostic::where('user_id', $this->id)->where('period_id', $period_id)->first();
    }
}
