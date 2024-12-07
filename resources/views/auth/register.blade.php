@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-md-6">
        <h1>Ro'yxat o'tish</h1>

        <form action="{{ route('register') }}" method="POST" role="form">
            @csrf

            <div class="form-group mb-3">
                <label for="name" class="form-label control-label">
                    @lang('Nomi')
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    @class(['form-control', 'is-invalid' => $errors->has('Nomi')])
                    required
                    autofocus
                >


                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label control-label">
                    @lang('validation.attributes.email')
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    @class(['form-control', 'is-invalid' => $errors->has('email')])
                    required
                >

                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label control-label">
                    @lang('Parol')
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    autocomplete="new-password"
                    @class(['form-control', 'is-invalid' => $errors->has('password')])
                    required
                >

                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password_confirmation" class="form-label control-label">
                    @lang('Parolni tasdiqlang')
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    autocomplete="new-password"
                    @class(['form-control', 'is-invalid' => $errors->has('Parolni tasdiqlang')])
                    required
                >

                @error('password_confirmation')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <input type="submit" class="btn btn-primary" value="@lang('auth.register')">
            </div>
        </form>
    </div>
</div>
@endsection
