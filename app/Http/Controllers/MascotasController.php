<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascotas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Session;

class MascotasController extends Controller
{
    public function __invoke()
    {
        return view('logAdmin');
    }

    public function index()
    {
        $mascotas = Mascotas::query()
                    ->where('raça', Session::get('raça'))
                    ->where('sexe', '<>', Session::get('sexe'))
                    ->get();

        return view('index', [
            'mascotas' => $mascotas,
        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function store(Request $request, Mascotas $mascotas)
    {
        $mascotasDataValidated         = $request->validate($mascotas->validationRules());

        $path                          = Storage::putFile('Mascotas', $request->file('foto'));
        $mascotasDataValidated['foto'] = $path;

        $mascotas->create($mascotasDataValidated);

        return redirect()->route('login');
    }

    public function foto($foto)
    {
        return view('foto',[
            'foto' => $foto,
        ]);
    }

    public function login(Request $request, Mascotas $mascotas){
        $credentials = $request->validate([
            'nick'     => ['required'],
            'password' => ['required'],
        ]);
        $comprobacion = Mascotas::query()
                        ->where("nick",$credentials['nick'])
                        ->where("password",$credentials['password'])
                        ->first();

        if($comprobacion) {
            $token = $request->session();
            Session::put('nick', $comprobacion->nick);
            Session::put('raça', $comprobacion->raça);
            Session::put('sexe', $comprobacion->sexe);
            Session::put('password', $comprobacion->password);
            return redirect()->route('index');
        }
        return back()->withErrors([
            'nick' => 'The provided credentials do not match our records.',
        ])->onlyInput('nick');

        // if(Auth::attempt($credentials)) {
        //     $token = $request->session();
        //     Session::put('nick', $credentials['nick']);
        //     Session::put('password', $credentials['password']);
        //     return view('index');
        // }
        // return back()->withErrors([
        //     'nick' => 'The provided credentials do not match our records.',
        // ])->onlyInput('nick');
    }

    public function logOut()
    {
        Session::remove('nick');
        Session::remove('raça');
        Session::remove('sexe');
        Session::remove('password');

        return redirect()->route('login');
    }
}