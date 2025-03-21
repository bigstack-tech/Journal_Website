<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['journal_id', 'user_id', 'message'];
    public function journal()
    {
        return $this->belongsTo(Journal_submission::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
