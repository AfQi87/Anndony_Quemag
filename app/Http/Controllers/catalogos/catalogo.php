<?php

namespace App\Http\Controllers\catalogos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class catalogo extends Controller
{
    //
    public function catalogo(){

        $IV1 = [
            'Referencia: 001', 
            'Nombre: Flauta Traversa',
            'Precio: 1.447.300'
        ];
        $IV2 = [
            'Referencia: 002', 
            'Nombre: Saxofon',
            'Precio: 1.804.700'
        ];

        $IV3 = [
            'Referencia: 003',
            'Nombre: Trompeta',
            'Precio: 583.500'
        ];
        $IV4 = [
            'Referencia: 004',
            'Nombre: Clarinete',
            'Precio: 2.073.500'
        ];
        $IV5 = [
            'Referencia: 005',
            'Nombre: Corno Frances',
            'Precio: 1.498.400'
        ];
        $IV6 = [
            'Referencia: 006',
            'Nombre: Trombón',
            'Precio: 591.700'
        ];
        

        $IC1 = [
            'Referencia: 007', 
            'Nombre: Guitarra Electrica Jazzmaster',
            'Precio: 1.200.900'
        ];
        $IC2 = [
            'Referencia: 008', 
            'Nombre: Guitarra Electrica G100',
            'Precio: 509.900'
        ];

        $IC3 = [
            'Referencia: 009',
            'Nombre: Violín 4/4',
            'Precio: 268.900'
        ];
        $IC4 = [
            'Referencia: 010',
            'Nombre: chelo 4/4',
            'Precio: 954.900'
        ];
        $IC5 = [
            'Referencia: 011',
            'Nombre: Contrabajo 4/4',
            'Precio: 2.636.900'
        ];
        $IC6 = [
            'Referencia: 012',
            'Nombre: Ukelele Tenor',
            'Precio: 290.900'
        ];
        
        return view('catalogo.Cviento')

            ->with('iv1', $IV1)
            ->with('iv2', $IV2)
            ->with('iv3', $IV3)
            ->with('iv4', $IV4)
            ->with('iv5', $IV5)
            ->with('iv6', $IV6)

            ->with('ic1', $IC1)
            ->with('ic2', $IC2)
            ->with('ic3', $IC3)
            ->with('ic4', $IC4)
            ->with('ic5', $IC5)
            ->with('ic6', $IC6)
        ;
    }
}
