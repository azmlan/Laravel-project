@extends('layouts.app')
@section('content')
<div class="wrapper pizza-index">
        <h1>: {{ __('messages.pizza orders') }} </h1>
        @foreach ($pizzas as $pizza)
        <div class='pizza-item'>
                <img src="/img/pizza.png" alt="pizza icon ">
                <h4><a href="/pizzas/{{$pizza->id}}"> {{$pizza-> name}} </a></h4>
        </div>
        @endforeach

        <a href="/"> {{ __('messages.home') }}</a><br>



</div>
@endsection