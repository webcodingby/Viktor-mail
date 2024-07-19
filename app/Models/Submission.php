<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submissions';

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    protected $casts = [
        'created_at',
        'updated_at'
    ];

    public function getFormattedDateAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-m-Y');
    }
}
