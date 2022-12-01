@extends('layouts.base')
@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{$pizza->name}}</h1>
    <p class="type">The type is <span class="type-span">{{$pizza->type}}</span></p>
    <p class="base">The base is <span class="base-span">{{$pizza->base}}</span></p>
    <p>The extra toppings are: </p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
        <a href="/pizzas" class="back">Back to all pizzas</a>
    </form>
</div>
@endsection

