<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        'firstname', 'middlename', 'surname', 'phone', 'dob',
    ];
}
