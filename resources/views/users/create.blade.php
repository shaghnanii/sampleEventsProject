@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New User') }}</div>

                <div class="card-body">
                    <form method="POST" action="/home/store">
                        @csrf

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text"
                                    class="form-control @error('user_name') is-invalid @enderror" name="user_name"
                                    value="{{ old('user_name') }}" required autocomplete="text"
                                    autofocus>

                                @error('user_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="user_email" type="email"
                                    class="form-control @error('user_email') is-invalid @enderror" name="user_email"
                                    value="{{ old('user_email') }}" required autocomplete="text"
                                    autofocus>

                                @error('user_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="user_password" type="password"
                                    class="form-control @error('user_password') is-invalid @enderror"
                                    name="user_password" required autocomplete="current-password">

                                @error('user_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add New User') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
