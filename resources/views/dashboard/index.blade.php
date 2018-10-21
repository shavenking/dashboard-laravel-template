@extends('layout.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome') }}</div>

                    <div class="card-body">
                        {{ __('Welcome') }}, {{ Auth::user()->display_name }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
