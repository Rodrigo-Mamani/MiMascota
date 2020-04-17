@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card p-3">
                        <div class="row justify-content-center">
                            <form class="col-10" method="POST" action="{{ route('home') }}" enctype="multipart/form-data">
                                @csrf
                                    <input class="@error('text') is-invalid @enderror col-10 form-control my-1" name="text" id="text" type="text" placeholder="Escribe algo...">
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
                            <ul style="padding-left:0px">
                            
                                @foreach($posts as $post)
                                <div class="row justify-content-center">
                                    <div class="col-12 p-3">
                                            <div class="col-8 mx-auto" style="z-index: 1">
                                                    <div class="caja">
                                                        <img src="/storage/{{$post->image}}" alt="" width="100%">
                                                    </div>
                                            </div>
                                            <div class="col-8 mx-auto">
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
                                {{$posts->links()}}
                            </ul>
                        </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection