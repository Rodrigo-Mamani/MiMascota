@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            
            <div class="col-12">
                <div>
                    <h1>{{ __('Registración') }}</h1>
                </div>
                <div>
                    <form class="formulario" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="theForm">
                        @csrf
                        <div class="form-group">
                                <label for="username">Nombre de usuario</label>
                                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" value="{{ old('username') }}">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                        </div>

                        <div class="form-group">
                                <label for="pais">Pais</label>
                                <select name="pais" id="paises">

                                </select>

                                    <label for="provincia">Provincia</label>
                                <select name="provincia" id="provincias">

                                </select>
                        </div>


                        <div class="form-group">
                            <label for="avatar">Foto de perfil:</label><br>
                            <input id="avatar" type="file" name="avatar">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirmar contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                        </div>

                        <div class="form-group row mb-0">
                                <button class="boton_personalizado" type="submit">
                                    Registrarse
                                </button>
                        </div>
                    </form>
                </div>
            </div>
            
    </div>
</div>
@section('scripts')
    <script src="{{ asset('../resources/app.js') }}" defer></script>
@endsection
@endsection
