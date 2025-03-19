<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
      
    ];
    public function journalSubmissions()
    {
        return $this->hasMany(Journal_submission::class);
    }
}
