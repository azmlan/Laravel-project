@extends('layouts.app')
@section('content')



<div class="wrapper pizza-details">
    <h1>{{ __('messages.order for') }} {{$pizza->name}} </h1>
    <p class="base">
        {{ __('messages.pizza base') }}
        - {{$pizza->base}}
    </p>
    <p class="type">{{ __('messages.pizza type') }} - {{$pizza->type}}</p>
    <p class="toppings">: {{ __('messages.pizza toppings') }}
    <ul>
        @foreach ($pizza->toppings as $topping)
        <li>
            {{$topping}}
        </li>
        @endforeach
    </ul>
    </p>

    <form action="{{route('pizzas.destroy',$pizza->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button>{{ __('messages.complete order') }}</button>
    </form>
</div>


<a href="/pizzas" class="back">
    <- {{ __('messages.back to all orders') }}</a><br><br>


        @endsection