<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class futbolEstatistikak extends Model
{
    protected $table = 'futbol_estatistikak'; /* taula izena */

    protected $primaryKey = 'taldea'; /* Taularen PK adierazi */

    protected $keyType = 'string'; /* PK -ren data mota */

    /* Editatu ahal direnak */
    protected $fillable = [
        'jokatutako_partidak',
        'irabazitako_partidak',
        'berdindutako_partidak',
        'galdu_partidak',
        'aldeko_golak',
        'kontrako_golak',
    ];

    protected $guarded = ['taldea']; /* Editatu ezin direnak */

}