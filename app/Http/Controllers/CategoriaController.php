<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if(!$request->ajax()) return redirect('/');

        $buscar = $request->buscar;
        $criterio = $request->criterio;

        $categoria = Categoria::paginate(4);

        if ($buscar=='') {
          $categoria = Categoria::orderBy('id','desc')->paginate(3);
          // code...
        }else {
          $categoria = Categoria::where($criterio, 'like','%'.$buscar.'%')->orderBy('id','desc')->paginate(3);
        }

        return[
          'pagination'=>[
              'total' => $categoria->total(),
              'current_page' => $categoria->currentPage(),
              'per_page' => $categoria->perPage(),
              'last_page' => $categoria->lastpage(),
              'from' => $categoria->firstItem(),
              'to' => $categoria->lastItem(),
          ],
          'categoria'=> $categoria
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        if(!$request->ajax()) return redirect('/');

        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->condicion='1';
        $categoria->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
      if(!$request->ajax()) return redirect('/');

      $categoria = Categoria::findOrFail($request->id);
      $categoria->nombre = $request->nombre;
      $categoria->descripcion = $request->descripcion;
      $categoria->condicion='1';
      $categoria->save();
    }
    public function desactivar(Request $request){
      if(!$request->ajax()) return redirect('/');

      $categoria = Categoria::findOrFail($request->id);
      $categoria->condicion='0';
      $categoria->save();
    }
    public function activar(Request $request){
      if(!$request->ajax()) return redirect('/');

      $categoria = Categoria::findOrFail($request->id);
      $categoria->condicion='1';
      $categoria->save();
    }



}
