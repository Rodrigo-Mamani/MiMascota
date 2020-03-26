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

class PerfilController extends Controller
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
    public function datosUsuario(){
        $users=User::all();
        $vac=compact('users');
        return view('perfil',$vac);
    }
    public function store(Array $req){
        dd($req);
    }
    protected function validator(array $req)
    {
        return Validator::make($req, [
            'image' => ['required', 'image'],
            'text' => ['string', 'max:500'],
        ]);
    }
    protected function postear(request $req)
    {
        $usuario=auth()->user();
        $ruta=$req['image']->store('public');
        $filename=basename($ruta);

        Post::create([
            'image' => $filename,
            'text' => $req['text'],
            'user_id' => $usuario->id,
        ]);
        return redirect('home');
    }
    public function destroy(request $req){
        //$user=auth()->user();
        //foreach($user['posts'] as $post)
        //$id=$post->id;
        $id=$req['id'];
        $flight= Post::find($id);
        $flight->delete();
        return redirect('perfil');
    }
}
