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
        'startDate',
        'duration',
        'enrollable',
    ];

    public function speakers()
    {
        return $this->hasMany('App\Speakers');
    }

    public function schedule()
    {
        return $this->hasMany('App\Schedule');
    } 
}
