<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class GamerController extends Controller
{


    public function jogos(){

        $games = DB::table('jogos')
        -> get();



    return view('home.jogos', compact('games'));
}


public function generos(){

    $genero = DB::table('genero')
    -> get();
    $jogos = DB::table('jogos')
    -> get();

    foreach ($genero as $item){
        $item->num= $this->numeroJogos($item->id);
    }

return view('home.generos', compact('genero',));

}



public function jogosGenero($id){


    $genero = DB::table('genero')
    -> where('id', $id)
    ->first();

    $todosJogos =  $this->todosJogosDoId($id);


    return view('home.jogosGenero', compact('genero','todosJogos'));
}

public function todosJogosDoId($id){

    $todosJogos = DB::table('jogos')
    -> where('genero', $id)
    -> get();

    return $todosJogos;
}

public function numeroJogos($id){
    $jogos =  $this->todosJogosDoId($id);
    return count($jogos);
}






}
