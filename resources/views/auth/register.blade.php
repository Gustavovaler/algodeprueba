@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- *******************************************************************************--> --}}
                        <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>

                            <div class="col-md-6">
                                <input id="edad" type="number" class="form-control" name="edad"  required >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pais" class="col-md-4 col-form-label text-md-right">Pais</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control" name="pais"  required >

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="whatsapp" class="col-md-4 col-form-label text-md-right">Whatsapp (opcional)</label>

                            <div class="col-md-6">
                                <input id="whatsapp" type="text" class="form-control" name="whatsapp" >

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">Género</label>

                            <div class="col-md-6">
                                
                                    <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="inlineRadio1" value="Masculino" checked>
                                        <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                      </div>
                                      <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="inlineRadio2" value="Femenino">
                                        <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                      </div>
                                      <div class="form-check form-check">
                                        <input class="form-check-input" type="radio" name="genero" id="inlineRadio3" value="Otro" >
                                        <label class="form-check-label" for="inlineRadio3">Otro</label>                                   
                                    </div>
                        </div>
                        </div>
            
                        {{-- ***************************************************************************  --}}

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
