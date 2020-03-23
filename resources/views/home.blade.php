@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Publicaciones</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Seccion de publicaciones.
                    <div>
                        <form method="POST" action="{{ route('home') }}" enctype="multipart/form-data">
                            @csrf
                            <label for="">Publicar contenido</label><br>
                            <input id="avatar" type="file" name="avatar"><br>
                            <input type="text" name="text">
                            <button type="submit" class="btn btn-success">Publicar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
