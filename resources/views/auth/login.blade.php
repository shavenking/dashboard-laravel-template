@extends('layout.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0 text-center py-2">{{ __('Login') }}</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('dashboard.login') }}" role="form">
                            @csrf

                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Username') }}" type="text"
                                           name="username">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="{{ __('Password') }}" type="password"
                                           name="password">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Login') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
