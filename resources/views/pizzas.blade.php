@extends('layouts.base')
@section('content')
    <div class="flex-center position-ref full-height">
            <div class="content">
                    <div class="title m-b-md">
                        Pizza List
                    </div>
                    @foreach ($pizzas as $pizza)
                        <p>{{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
                    @endforeach
                </div>
            </div>
    </div>
@endsection

