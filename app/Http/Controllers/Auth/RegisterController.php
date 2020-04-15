<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    |Este controlador maneja el registro de nuevos usuarios, así como su 
    |validación y creación. Por defecto, este controlador utiliza un rasgo para 
    |proporcionar esta funcionalidad sin requerir ningún código adicional.
    |
    */

    use RegistersUsers;

    /**
     * Dónde redirigir a los usuarios después del registro.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:12', 'min:3'],
            'surname' => ['required', 'string', 'max:12', 'min:3'],
            'username' => ['required', 'string', 'max:12', 'min:3', 'unique:users'],
            'avatar' => ['image'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $ruta=$data['avatar']->store('public');
        $filename=basename($ruta);

        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'username' => $data['username'],
            'img' => $filename,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
