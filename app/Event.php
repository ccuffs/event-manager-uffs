<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $casts = [
        'enrollable' => 'boolean',
    ];

    protected $fillable = [
        'name',
        'description',
        'place',
        'course',
        'start_date',
        'duration',
        'enrollable',
        'page_link',
        'banner',
    ];
}
