<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;

class cursoController extends Controller
{
    

    public function indes (){
        $categorias = categorias::orderby('id','desc')
                                ->paginate(10);
        //return $categorias;
        
        return view ('plan.indes', compact ('categorias'));
    }

    public function create (){
        return view ('plan.create');;
    }

    public function store (Request $request){
        $curso =new categorias();
        $curso->title=$request->title;
        $curso->category=$request->category;
        $curso->content=$request->content;

        $curso->save();

        return redirect('/cursos');
    }


    public function show ($curso){
        $curso = categorias::find($curso);
        
        return view ('plan.show', compact('curso'));
    }

    public function edit ($curso){
        $curso = categorias::find($curso);
        return view ('plan.edit', compact('curso'));
    }
    public function update (Request $request, $curso){

        $curso = categorias::find($curso);
        $curso->title=$request->title;
        $curso->category=$request->category;
        $curso->content=$request->content;

        $curso->save();

        return redirect ("/cursos/{$curso->id}");
    }

    public function delete ($curso){

        $curso = categorias::find($curso);
        $curso->delete();
        return redirect ("/cursos");
    }
}

