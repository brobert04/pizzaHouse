<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{

//    the function for the route /pizzas
    public function index(){
        $pizzas = [
            ['type' => 'hawaiian', 'base' => 'cheesy crust'],
            ['type' => 'volcano', 'base' => 'garlic crust'],
            ['type' => 'veg supreme', 'base' => 'thin & crispy']
        ];
        return view('pizzas',[
            'pizzas' => $pizzas,]);
    }

//    the function for the route /pizzas/{id}
    public function show($id){
        return view('details', ['id' => $id]);
    }

}
