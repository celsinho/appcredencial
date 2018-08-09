<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;
use App\Controlcred;
use DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $xci = $request->get('xci');

        /*$estudiantes = DB::table('estudiante')
                        ->where('ci','like',"%$xci%")
                        //->get();
                        ->paginate(10);*/

        $estudiantes = DB::table('estudiante')
                        ->leftJoin(DB::raw('(select ci, count(ci) as cantidad from control_cred group by ci) as control_cred'),
                            function ($join) {
                                $join->on('estudiante.ci', '=', 'control_cred.ci');
                            })
                        ->select('estudiante.paterno as paterno', 'estudiante.materno as materno','estudiante.nombres as nombres','estudiante.ci as ci','estudiante.telefono as telefono','estudiante.email as email','estudiante.idCarrera as idCarrera','estudiante.nombreFoto as nombreFoto','control_cred.cantidad as cantidad')
                        ->where('estudiante.ci','like',"%$xci%")
                        ->paginate(10);

        return view('estudiante.index')->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $control = new ControlCred;
        $control->ci = $id;
        $control->fecha = date('Y-m-d');
        $control->hora = date('H:i:s');
        $control->save();

        $estudiante = Estudiante::find($id);
        $pdf = \PDF::loadView('estudiante.credencial', ['estudiante'=>$estudiante]); //maximo se puede enviar dos parametros
        $pdf->setPaper('credencial'); 
        //return $pdf->download('reporteRol.pdf');
        //return $pdf->download($estudiante->ci.'.pdf');
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
