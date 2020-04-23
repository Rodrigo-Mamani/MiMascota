<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Post;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $posts=Post::orderBy('created_at','desc')->paginate(10);
            return view('home')->with('posts',$posts);
    }
    protected function validator(array $req)
    {
        $imagen = $req['archivo'];
        $imagen_1=$imagen[0];
        $imagen_2=$imagen[1];
        $imagen_3=$imagen[2];   
        return Validator::make($req, [
            $imagen_1 => ['required', 'image'],
            $imagen_2 => ['required', 'image'],
            $imagen_3 => ['required', 'image'],
            'text' => ['string', 'max:500'],
        ]);
    }
    protected function postear(request $req)
    {
        $imagen=$req["archivo"];
        $imagen_1=$imagen[0];
        $imagen_2=$imagen[1];
        $imagen_3=$imagen[2];
        $usuario=auth()->user();
        $ruta_1=$imagen_1->store('public');
        $filename_1=basename($ruta_1); //Devuelve el último componente de nombre de una ruta
        $ruta_2=$imagen_2->store('public');
        $filename_2=basename($ruta_2);
        $ruta_3=$imagen_3->store('public');
        $filename_3=basename($ruta_3);
        Post::create([
            'imagen1' => $filename_1,
            'imagen2' => $filename_2,
            'imagen3' => $filename_3,
            'text' => $req['text'],
            'user_id' => $usuario->id,
        ]);
        return redirect('home');
    }
    protected function preguntas(){
        return view('questions');
    }
}