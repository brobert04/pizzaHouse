<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

//    the function for the route /pizzas
    public function index(){
        $pizzas = Pizza::all();
        return view('pizzas.index',[
            'pizzas' => $pizzas,]);
    }

//    the function for the route /pizzas/{id}
    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['id' => $id, 'pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings') ;
        $pizza->save();

        return redirect('/')->with('msg', 'Your order has been submited!');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
