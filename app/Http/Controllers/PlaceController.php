<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    /**
     * Exibe todos os espaços cadastrados.
     *
     * @return \Illuminate\View\View
     */
    public function index(){
        $places = Place::all();
        //dd($places);
        return view('Places\table', ['places' => $places]);
    }

    /**
     * Mostra o formulário para criar um novo espaço.
     *
     * @return \Illuminate\View\View
     */
    public function create(){
        return view('Places\form');
    }

    /**
     * Armazena os dados de um novo espaço no banco de dados.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $place = new Place();
        $place->name = $request->name;
        $place->Description = $request->Description;
        $place->capacity = $request->capacity;

        //insert no bd
        $place->save(); 

        //retorna ao início
        return redirect("/");
    }
}