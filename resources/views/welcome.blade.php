@extends('layouts.app')

@section('content')
<!-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}"></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"></a>
                @endif
            @endauth
        </div>
    @endif -->

<div class="content">
    <img src="/img/pizza-house.png" alt="pizza house logo">
    <div class="title m-b-md">
        {{ __('messages.pizzahouse r') }}
    </div>
    <p class="mssg">{{ session('mssg') }}</p>
    <a href="{{route('pizzas.create')}}">{{ __('messages.new order') }}</a>
    <br>
    <a href="{{route('pizzas.index')}}">{{ __('messages.all orders') }}</a>
</div>
</div>
@endsection