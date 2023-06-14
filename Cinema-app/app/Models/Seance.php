<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time'
    ];


    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }
    
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
