<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miss extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'categiry',
        'work',
        'country',
        'workplace',
        'image'

    ];
}
