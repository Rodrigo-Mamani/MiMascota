@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card p-3">
                        <div class="row justify-content-center">
                            <form class="col-10" method="POST" action="{{ route('home') }}" enctype="multipart/form-data">
                                @csrf
                                    <input class="@error('text') is-invalid @enderror col-10 form-control my-1" name="text" id="text" type="text" placeholder="Escribe algo..." required>
                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <input class="@error('image') is-invalid @enderror col-10 form-control p-1" type="file" id="archivo[]" name="archivo[]" multiple="" required>
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
                                    <div class="col-10 p-3">
                                    <div id="carouselExampleIndicators" class="carousel slide overflow-hidden" style="height: 350px" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img src="/storage/{{$post->imagen1}}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="/storage/{{$post->imagen2}}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                            <img src="/storage/{{$post->imagen3}}" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                            <div class="mx-auto">
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