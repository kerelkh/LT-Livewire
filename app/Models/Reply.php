<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function timeline()
    {
        return $this->belongsTo(Timeline::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
