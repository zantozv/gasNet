<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Servicio;
use App\User;
use App\Ciudad;
use App\TipoServicio;



class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicio = DB::table('users')
                ->join('servicios','servicios.idUsuario','=','users.id')
                ->join('ciudades','servicios.idCiudad','=','ciudades.idCiudad')
                ->join('tiposervicios','servicios.idTiposervicio','=','tiposervicios.idTiposervicio')
                ->select('servicios.idServicio','users.id','ciudades.idCiudad','tiposervicios.idTiposervicio','users.name as pernombre','ciudades.nombre as ciudnombre','tiposervicios.nombre as servnombre','servicios.direccion','servicios.descripcion','servicios.valor','servicios.estado')
                ->get();

        //$servicio = Servicio::orderBy('idServicio','ASC')->get();
        return view('/Servicio/index',['servicio'=>$servicio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $tiposervicios = TipoServicio::orderBy('nombre','ASC')->get();
         $tecnicos = User::orderBy('name','ASC')->get();
         $ciudades = Ciudad::orderBy('nombre','ASC')->get();
         
        return view('/Servicio/create')->with('tiposervicios',$tiposervicios)->with('tecnicos',$tecnicos)->with('ciudades',$ciudades);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Servicio::create([
            'idUsuario'=>$request['idUsuario'],
            'idCiudad'=>$request['idCiudad'],
            'idTiposervicio'=>$request['idTiposervicio'],
            'direccion'=>$request['direccion'],
            'descripcion'=>$request['descripcion'],
            'valor'=>$request['valor'],
            'estado'=>$request['estado']
            
        ]);
        return redirect()->route('servicio.index');
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
        $servicios = Servicio::findOrFail($id);
        $tiposervicios = TipoServicio::orderBy('nombre','ASC')->get();
        $tecnicos = User::orderBy('name','ASC')->get();
        $ciudades = Ciudad::orderBy('nombre','ASC')->get();
         
       
         return view('/Servicio/edit')->with('servicios',$servicios)->with('tiposervicios',$tiposervicios)->with('tecnicos',$tecnicos)->with('ciudades',$ciudades);

       
        // return view('/Servicio/edit',['servicio'=>$servicio]);
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
        $servicio = Servicio::findOrFail($id);
        $servicio->update([
            'idUsuario'=>$request['idUsuario'],
            'idCiudad'=>$request['idCiudad'],
            'idTiposervicio'=>$request['idTiposervicio'],
            'direccion'=>$request['direccion'],
            'descripcion'=>$request['descripcion'],
            'valor'=>$request['valor'],
            'estado'=>$request['estado']
            
        ]);
        return redirect()->route('servicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio  = Servicio ::findOrFail($id);
        $servicio ->delete();
        return redirect()->route('servicio.index');
    
    }
}


// $ciudades = Ciudades::findOrFail($id);
//         $departamentos = Departamentos::orderBy('nombre','ASC')->get();
//         return view('ciudades/edit')->with('ciudades',$ciudades)->with('departamentos',$departamentos);