@extends('layouts.app')
@section('content')

<div class="wrapper create-pizza">
      <h1>{{ __('messages.new order') }}</h1>
      <!-- <form action="/pizzas" method="POST"> -->

      <div class="alert-success" style="display:none;" id="ajax-alert-offer-saved">
            {{ __('messages.order success') }}
      </div>
      <div class="alert-danger" style="display:none; margin:0 auto;" id="ajax-alert-offer-not-saved">
            {{ __('messages.order error') }}
      </div>
      <form method='POST' id="idCreateOrder" action="">
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
                  <input type="checkbox" class="toppings" name='toppings[]' value="{{ __('messages.mushroom') }}">
                  {{ __('messages.mushroom') }}
                  <br>
                  <input type="checkbox" class="toppings" name='toppings[]' value="{{ __('messages.paparoni') }}">
                  {{ __('messages.paparoni') }}
                  <br>
                  <input type="checkbox" class="toppings" name='toppings[]' value="{{ __('messages.checking wings') }}">
                  {{ __('messages.checking wings') }}
                  <br>
            </fieldset>
            <button id="orderSubmit" class="btn btn-primary"> {{ __('messages.complete order') }}</button>
      </form>
      <br>

      <a href="/pizzas">
            < {{ __('messages.back to all orders') }}</a>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
      $(document).on('click', '#orderSubmit', function(e) {
            e.preventDefault();

            // this is to save the form 
            var formData = new FormData($('#idCreateOrder')[0]);
            $.ajax({
                  //enctype is for if you want upload a file
                  type: 'post',
                  enctype: 'multipart/form-data',
                  url: "{{url('/pizzas/store')}}",
                  data: formData,
                  processData: false,
                  contentType: false,
                  cache: false,
                  // data:
                  // //long way so save the form //
                  // {
                  //       '_token': "{{csrf_token()}}",

                  //       'type': $("input[name='type']").val(),
                  //       'base': $("input[name='base']").val(),
                  //       'name': $("input[name='name']").val(),
                  //       'toppings': $("input[name='toppings']").val(),

                  // },

                  success: function(data) {
                        if (data.status == true) {
                              $('#ajax-alert-offer-saved').show();
                              $('#name').val(" ");
                              // $('.toppings').val(" ");
                              $('.toppings').prop('checked', false); // Unchecks it

                        } else {
                              $('#ajax-alert-offer-not-saved').show();
                        }
                  },
                  error: function(reject) {

                  },


            });

      });
</script>

@endsection