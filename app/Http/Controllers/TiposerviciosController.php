<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoServicio;

class TiposerviciosController extends Controller
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
        $tiposervicio = TipoServicio::orderBy('nombre','ASC')->get();
        return view('/TipoServicio/index',['tiposervicio'=>$tiposervicio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/TipoServicio/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        TipoServicio::create([
            'nombre'=>$request['nombre']
        ]);
        return redirect()->route('tiposervicio.index');
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
        $tiposervicio = TipoServicio::findOrFail($id);
        return view('/TipoServicio/edit',['tiposervicio'=>$tiposervicio]);
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
        $tiposervicio = TipoServicio::findOrFail($id);
        $tiposervicio->update([
            'nombre'=>$request['nombre']
        ]);
        return redirect()->route('tiposervicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiposervicio = TipoServicio::findOrFail($id);
        $tiposervicio->delete();
        return redirect()->route('tiposervicio.index');
    }
}
