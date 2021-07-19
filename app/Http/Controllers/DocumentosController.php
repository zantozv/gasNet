<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documento;
use App\Servicio;
use DB;

class DocumentosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documento = DB::table('servicios')
                        ->join('documentos','documentos.idServicio','=','servicios.idServicio')
                        ->join('tiposervicios','servicios.idTiposervicio','=','tiposervicios.idTiposervicio')
                        ->select('documentos.idDocumento','servicios.idServicio','servicios.idTiposervicio','tiposervicios.nombre as nomservicio','documentos.archivosAdjuntos','documentos.observaciones','documentos.estado')
                        ->orderBy('idDocumento','ASC')
                        ->get();
        return view('/Documento/index',['documento'=>$documento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicio::orderBy('idServicio','ASC')->get();
        // $documento = Documento::orderBy('idDocumento','ASC')->get();
        return view('/Documento/create',['servicios'=>$servicios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Documento::create([
            'idServicio'=>$request['idServicio'],
            'archivosAdjuntos'=>$request['archivosAdjuntos'],
            'observaciones'=>$request['observaciones'],
            'estado'=>$request['estado']
            
        ]);
        return redirect()->route('documento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documento = Documento::findOrFail($id);
        $servicios = Servicio::orderBy('idServicio','ASC')->get();
        return view('/Documento/edit')->with('documento',$documento)->with('servicios',$servicios);
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
        $documento = Documento::findOrFail($id);
        $documento->update([
            'idServicio'=>$request['idServicio'],
            'adjuntoDiligenciado'=>$request['adjuntoDiligenciado'],
            'observaciones'=>$request['observaciones'],
            'estado'=>$request['estado']
            
        ]);
        return redirect()->route('documento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $documento  = Documento ::findOrFail($id);
        $documento ->delete();
        return redirect()->route('documento.index');
    }
}
