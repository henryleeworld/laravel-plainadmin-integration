@extends('layouts.app')

@section('content')
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Dashboard') }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <p>
                    {{ __('You are logged in!') }}
                </p>
            </div>
        </div>
    </div>
@endsection
