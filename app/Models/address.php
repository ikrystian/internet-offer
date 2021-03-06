<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $fillable = ['city',
        'street',
        'number',

        'speed-popc-fiber-1',
        'speed-popc-fiber-2',
        'speed-popc-fiber-3',
        'speed-popc-fiber-4',
        'speed-popc-fiber-5',
        'price-popc-fiber-1',
        'price-popc-fiber-2',
        'price-popc-fiber-3',
        'price-popc-fiber-4',
        'price-popc-fiber-5',
        'name-popc-fiber-1',
        'name-popc-fiber-2',
        'name-popc-fiber-3',
        'name-popc-fiber-4',
        'name-popc-fiber-5',

        'speed-popc-radio-1',
        'speed-popc-radio-2',
        'speed-popc-radio-3',
        'speed-popc-radio-4',
        'speed-popc-radio-5',
        'price-popc-radio-1',
        'price-popc-radio-2',
        'price-popc-radio-3',
        'price-popc-radio-4',
        'price-popc-radio-5',
        'name-popc-radio-1',
        'name-popc-radio-2',
        'name-popc-radio-3',
        'name-popc-radio-4',
        'name-popc-radio-5',

        'speed-htk-radio-1',
        'speed-htk-radio-2',
        'speed-htk-radio-3',
        'speed-htk-radio-4',
        'speed-htk-radio-5',
        'price-htk-radio-1',
        'price-htk-radio-2',
        'price-htk-radio-3',
        'price-htk-radio-4',
        'price-htk-radio-5',
        'name-htk-radio-1',
        'name-htk-radio-2',
        'name-htk-radio-3',
        'name-htk-radio-4',
        'name-htk-radio-5',

        'speed-htk-fiber-1',
        'speed-htk-fiber-2',
        'speed-htk-fiber-3',
        'speed-htk-fiber-4',
        'speed-htk-fiber-5',
        'price-htk-fiber-1',
        'price-htk-fiber-2',
        'price-htk-fiber-3',
        'price-htk-fiber-4',
        'price-htk-fiber-5',
        'name-htk-fiber-1',
        'name-htk-fiber-2',
        'name-htk-fiber-3',
        'name-htk-fiber-4',
        'name-htk-fiber-5',

        'chanels-dvbc-1',
        'chanels-dvbc-2',
        'chanels-dvbc-3',
        'chanels-dvbc-4',
        'chanels-dvbc-5',
        'price-dvbc-1',
        'price-dvbc-2',
        'price-dvbc-3',
        'price-dvbc-4',
        'price-dvbc-5',
        'name-dvbc-1',
        'name-dvbc-2',
        'name-dvbc-3',
        'name-dvbc-4',
        'name-dvbc-5',

        'chanels-iptv-1',
        'chanels-iptv-2',
        'chanels-iptv-3',
        'chanels-iptv-4',
        'chanels-iptv-5',
        'price-iptv-1',
        'price-iptv-2',
        'price-iptv-3',
        'price-iptv-4',
        'price-iptv-5',
        'name-iptv-1',
        'name-iptv-2',
        'name-iptv-3',
        'name-iptv-4',
        'name-iptv-5',
        ];
}
