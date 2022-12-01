@extends('layouts.base')
@section('content')
       <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <img style="display: inline;" src="/img/img.png" id="logo">
                <div class="title m-b-md">
                    The North's Best Pizzas
                </div>
                <div class="links">
                    <a href="/pizzas/create">Order</a>
                </div>
                <p style="color:green; font-width:bold; font-size: 20px;">{{session('msg')}}</p>
            </div>
        </div>
@endsection
