<?php

namespace App\Http\Controllers;

use App\Models\futbolEstatistikak;
use Illuminate\Http\Request;

class estatistikakKontroladorea extends Controller
{
    /* Datu guztiak lortzeko */
    public function lortu()
    {
        $emaitza = futbolEstatistikak::all();
        if (!$emaitza) {
            return response()->json($emaitza, 500);
        }
        return response()->json($emaitza, 200);
    }

    /* Datuak txertatzko */
    public function txertatu(Request $aux)
    {
        $datuak = $aux->all();
        $berria = [
            'taldea' => $datuak['taldea'],
            'jokatutako_partidak' => $datuak['jokatutako_partidak'],
            'irabazitako_partidak' => $datuak['irabazitako_partidak'],
            'berdindutako_partidak' => $datuak['berdindutako_partidak'],
            'galdu_partidak' => $datuak['galdu_partidak'],
            'aldeko_golak' => $datuak['aldeko_golak'],
            'kontrako_golak' => $datuak['kontrako_golak']
        ];

        futbolEstatistikak::insert($berria);

        return response()->json($berria, 201);
    }

    /* Datuak ezbatzeko */
    public function ezabatu(Request $taldea)
    {
        $taldea = request()->segment(3);
        $emaitza = futbolEstatistikak::find($taldea);

        /* Manejo de errores */
        if ($emaitza) {
            $emaitza->delete();
            return response()->json('Ondo ezabatuta', 200);
        } else {
            return response()->json('ERROR', 500);
        }
    }

    /* Bilatzeko */
    public function bilatu($taldea)
    {
        $taldea = request()->segment(3);
        $table = futbolEstatistikak::find('taldea', $taldea);
        return response()->json($table, 200);
    }

    /* Eguneratzeko */
    public function eguneratu(Request $aux)
    {
        $taldea = request()->segment(3);
        $datuak = [
            'jokatutako_partidak' => $aux['jokatutako_partidak'],
            'irabazitako_partidak' => $aux['irabazitako_partidak'],
            'berdindutako_partidak' => $aux['berdindutako_partidak'],
            'galdu_partidak' => $aux['galdu_partidak'],
            'aldeko_golak' => $aux['aldeko_golak'],
            'kontrako_golak' => $aux['kontrako_golak']
        ];
        $emaitza = futbolEstatistikak::find($taldea);
        $emaitza->update($datuak);
        return response()->json('Ondo eguneratuta', 200);

    }
}