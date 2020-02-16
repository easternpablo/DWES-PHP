<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruteriaController extends Controller
{
    public function index(){
        return view('index');
    }

    public function createForm(){
        return view('fruta.formulario');
    }

    public function updateForm($id){
        $fruta = DB::table('frutas')->where('id',$id)->first();
        return view('fruta.formulario_update',['fruta'=>$fruta]);
    }

    public function save(Request $request){
        $fruta = DB::table('frutas')->insert(array(
            'name'=>$request->input('nombre'),
            'description'=>$request->input('descripcion'),
            'precio'=>$request->input('precio'),
            'fecha'=>date("Y-m-d")
        ));
        return redirect()->action("FruteriaController@listarFrutas")->with('status','Fruta insertada correctamente');
    }

    public function update(Request $request, $id){
        $fruta = DB::table('frutas')->where('id',$id)
            ->update([
                'name'=>$request->input('nombre'),
                'description'=>$request->input('descripcion'),
                'precio'=>$request->input('precio'),
                'fecha'=>date('Y-m-d')
            ]);
        return redirect()->action("FruteriaController@listarFrutas")->with('status','Fruta actualizada correctamente');
    }

    public function delete($id){
        $fruta = DB::table('frutas')->where('id',$id)->delete();
        return redirect()->action("FruteriaController@listarFrutas")->with('status','Fruta borrada correctamente');
    }

    public function verFruta($id){
        $fruta = DB::table('frutas')->where('id',$id)->first();
        return view('fruta.detalle',['fruta'=>$fruta]);
    }

    public function listarFrutas(){
        $frutas = DB::table('frutas')->orderBy('id','asc')->get();
        return view('fruta.listado',['frutas'=>$frutas]);
    }
}
