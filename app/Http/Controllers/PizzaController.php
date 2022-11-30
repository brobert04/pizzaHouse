<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

//    the function for the route /pizzas
    public function index(){
        $pizzas = Pizza::all();
        return view('pizzas',[
            'pizzas' => $pizzas,]);
    }

//    the function for the route /pizzas/{id}
    public function show($id){
        return view('details', ['id' => $id]);
    }

}
