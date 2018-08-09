<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneradorController extends Controller
{
    
    public function imprimir(){
            
            $pdf = \PDF::loadView('ejemplo');
            $pdf->setPaper('credencial'); 
            return $pdf->download('ejemplo.pdf');
    }

}
