@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('messages.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('messages.login success') }}
                    <p>
                        <a href="/pizzas">{{ __('messages.all order') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection