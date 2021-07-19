<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisito;
use App\Tiposervicio;
use DB;
class RequisitosController extends Controller
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
        $requisito = DB::table('tiposervicios')
                        ->join('requisitos','requisitos.idTiposervicio','=','tiposervicios.idTiposervicio')
                        ->select('requisitos.idRequisito','tiposervicios.idTiposervicio','tiposervicios.nombre as servnombre','requisitos.nombre','requisitos.observaciones')
                        ->orderBy('requisitos.nombre','ASC')
                        ->get();
        return view('/Requisito/index',['requisito'=>$requisito]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposervicios = Tiposervicio::orderBy('nombre','ASC')->get();
        return view('/Requisito/create',['tiposervicios'=>$tiposervicios]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Requisito::create([
            'idTiposervicio'=>$request['idTiposervicio'],
            'nombre'=>$request['nombre'],
            'observaciones'=>$request['observaciones']
            
        ]);
        return redirect()->route('requisito.index');
    }


    public function edit($id)
    {
        $requisito = Requisito::findOrFail($id);
        $tiposervicios = TipoServicio::orderBy('nombre','ASC')->get();
        return view('/Requisito/edit')->with('requisito',$requisito)->with('tiposervicios',$tiposervicios);
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
        $requisito = Requisito::findOrFail($id);
        $requisito->update([
            'idTiposervicio'=>$request['idTiposervicio'],
            'nombre'=>$request['nombre'],
            'observaciones'=>$request['observaciones']
            
        ]);
        return redirect()->route('requisito.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $requisito  = Requisito ::findOrFail($id);
        $requisito ->delete();
        return redirect()->route('requisito.index');
    }
}
