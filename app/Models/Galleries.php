<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;


class Galleries extends Model
{
    use HasFactory;
    // static::creating(function($item) {
    //     if ($item->data[0]['layout'] === 'video') {
    //         foreach (request()->files as $vid) {
    //             if (!str_contains($vid->getMimeType(), 'video')){
    //                 throw new \Exception('Only video formats are allowed');
    //             }
    //         }
    //     }
    // });

    // static::updating(function($item) {
    //     if ((count(request()->files)>0) && $item->data[0]['layout'] === 'video') {
    //         foreach (request()->files as $vid) {
    //             if (!str_contains($vid->getMimeType(), 'video')){
    //                 throw new \Exception('Only video formats are allowed');
    //             }
    //         }
    //     }
    // });
}
