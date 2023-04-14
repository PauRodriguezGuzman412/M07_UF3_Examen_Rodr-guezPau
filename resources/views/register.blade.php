@extends('layout.layout')

@section('title','Laravel')

@section('header')
@include('layout.header')

@section('component')
    <form method="POST" action="" enctype="multipart/form-data">
        {{-- Si la ruta Post tiene el mismo nombre, no hace falta pasarle el campo 'action'! --}}
        @csrf
        <h1>REGISTRA TU MASCOTA</h1>
        <div>
            Nick: <input type="text" name="nick" placeholder="nick...">
        </div>
        <div>
            Password: <input type="password" name="password" placeholder="Password...">
        </div>
        <div>
            Raça:
            <select name="raça" type="text" value="{{ old('raça','') }}">
                <option value="" selected disabled >Selecciona una opción</option>
                <option value="Boxer">Boxer</option>
                <option value="Buldog">Buldog</option>
                <option value="Labrador">Labrador</option>
                <option value="Caniche">Caniche</option>
            </select>
        </div>
        <div>
            Sexe:
            <select name="sexe" type="text" value="{{ old('sexe','') }}">
                <option value="" selected disabled >Selecciona una opción</option>
                <option value="Mascle">Mascle</option>
                <option value="Femella">Femella</option>
            </select>
        </div>
        <div>
            Edat: <input type="text" name="edat" placeholder="Edat...">
        </div>
        <div>
            Color: <input type="text" name="color" placeholder="Color...">
        </div>
        <div>
            Nom del humà: <input type="text" name="nom_huma" placeholder="Nom de l'humà...">
        </div>
        <div>
            Telefon de l'humà: <input type="text" name="telefon_huma" placeholder="Telèfon de l'humà...">
        </div>
        <div>
            Foto: <input type="file" name="foto">
        </div>

        <div>
            <button type="submit" class="submitLogAdminButton">Registrar</button>
        </div>
    </form>
    <a href="{{ route('login') }}">Atrás</a>

    @foreach ($errors->all() as $error)
        <div class="container">
            <li class="alert alert-danger">{{ $error }}</li>
        </div>
    @endforeach
