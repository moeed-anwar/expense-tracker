<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $fillable = [
        'amount',
        'type',
        'description',
        'date',

    ];
}
