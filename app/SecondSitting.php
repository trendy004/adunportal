<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecondSitting extends Model
{
    protected $fillable = [
        'candidate_id', 'subject_id', 'grade_id'
    ];
}
