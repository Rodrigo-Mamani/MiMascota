@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card p-3">
                        <div class="row justify-content-center">
                            <form class="col-10" method="POST" action="{{ route('home') }}" enctype="multipart/form-data">
                                @csrf
                                    <input class="@error('text') is-invalid @enderror col-10 form-control my-1 form-control" name="text" id="text" type="text" placeholder="Escribe algo...">
                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input class="@error('image') is-invalid @enderror col-10 form-control p-1" id="image" type="file" name="image" required>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="col-10 mr-auto my-1"><button class="boton_personalizado" type="submit">Compartir publicación</button></div>
                            </form>
                        </div>
                </div>
            </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="p-3">
                            <h2 style="text-align: center">Estas en tu perfil  {{ Auth::user()->name }}!</h2>
                            <h4 style="text-align: center"><a class="link" href="{{ route('home') }}">Volver al inicio</a></h4>
                            <ul style="padding-left:0px">
                            @foreach($users as $user)
                            @if($user->id == Auth::user()->id)
                            @foreach($user['posts'] as $post)
                                <div class="row justify-content-center">
                                    <div class="col-12 p-3">
                                            <div class="col-7 mx-auto" style="z-index: 1">
                                                    <div class="position-absolute" style="z-index: 2;right:10px;top:0px"><a href="#" >
                                                        <div class="nav-item dropdown">
                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                    <span class="caret"></span>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                    <form action="{{ route('post.delete') }}" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id" value="{{$post['id']}}">
                                                                        <input class="dropdown-item" onclick="return confirm('¿Seguro que desea eliminar?')" type="submit" name="" value="Eliminar publicación">
                                                                    </form>
                                                                </div>                                         
                                                        </div>
                                                    </div>
                                                    <div class="cubo">
                                                    <img src="/storage/{{$post['image']}}" alt="" width="100%"><br>
                                                    </div>
                                            </div>
                                            <div class="col-7 mx-auto">
                                            <div class="card text-center">
                                                    <!--<div class="card-header">
                                                        Featured
                                                    </div>-->
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{$post->text}}</h5>
                                                    </div>
                                                    <div class="card-footer text-muted">
                                                        {{$post->created_at}}
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                @endforeach
                            </ul>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection