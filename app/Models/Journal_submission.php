<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Journal_submission extends Model
{
    use HasFactory;
    use Notifiable;

    public function year()
    {
        return $this->belongsTo(Years::class);
    }
}
