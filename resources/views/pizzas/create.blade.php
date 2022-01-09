@extends('layouts.app')
@section('content')

<div class="wrapper create-pizza">
      <h1>{{ __('messages.new order') }}</h1>
      <form action="/pizzas" method="POST">
            @csrf
            <label for="name"> {{ __('messages.your name') }} </label> <input type="text" id="name" name="name">
            <label for="type"> {{ __('messages.pizza type') }}</label>
            <select name="type" id="type">



                  <option value="{{ __('messages.margaretta') }}">
                        {{ __('messages.margaretta') }}
                  </option>

                  <option value="{{ __('messages.hawai') }}">
                        {{ __('messages.hawai') }}
                  </option>

                  <option value="{{ __('messages.vigitables') }}">
                        {{ __('messages.vigitables') }}
                  </option>

                  <option value="{{ __('messages.paparoni') }}">
                        {{ __('messages.paparoni') }}
                  </option>


            </select>

            <label for="base"> {{ __('messages.choose base') }}</label>
            <select name="base" id="base">

                  <option value="{{ __('messages.thin') }}">
                        {{ __('messages.thin') }}
                  </option>
                  <option value="{{ __('messages.garlic') }}">
                        {{ __('messages.garlic') }}
                  </option>
                  <option value="{{ __('messages.crispy') }}">
                        {{ __('messages.crispy') }}
                  </option>
                  <option value="{{ __('messages.thik') }}">
                        {{ __('messages.thik') }}
                  </option>
            </select>
            <fieldset>
                  <label> {{ __('messages.toppings') }} </label> <br>
                  <input type="checkbox" name='toppings[]' value="{{ __('messages.mushroom') }}">
                  {{ __('messages.mushroom') }}
                  <br>
                  <input type="checkbox" name='toppings[]' value="{{ __('messages.paparoni') }}">
                  {{ __('messages.paparoni') }}
                  <br>
                  <input type="checkbox" name='toppings[]' value="{{ __('messages.checking wings') }}">
                  {{ __('messages.checking wings') }}
                  <br>
            </fieldset>
            <input type="submit" value="{{ __('messages.complete order') }}">
      </form>
      <br>

      <a href="/">
            < {{ __('messages.back to all orders') }}</a>

</div>

@endsection