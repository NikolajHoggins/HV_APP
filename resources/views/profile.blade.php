@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        {{-- CVR --}}
                        <div class="form-group row">
                            <label for="cvr" class="col-md-4 col-form-label text-md-right">{{ __('CVR') }}</label>

                            <div class="col-md-6">
                            <input disabled type="number" class="form-control @error('cvr') is-invalid @enderror" name="cvr" value="{{ Auth::user()->cvr }}" autofocus>

                                @error('cvr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Company Name --}}
                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ Auth::user()->company_name }}" >

                                @error('private_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Company Email --}}
                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Email') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control @error('company_name') is-invalid @enderror" name="company_email" value="{{ Auth::user()->company_email }}">

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Private Email --}}
                        <div class="form-group row">
                            <label for="private_email" class="col-md-4 col-form-label text-md-right">{{ __('Private Email') }}</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control @error('private_email') is-invalid @enderror" name="private_email" value="{{ Auth::user()->private_email }}">

                                @error('private_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Old Password --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="old_password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Password --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- Gentag Password --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Gentag Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        {{-- Center Button --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
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
