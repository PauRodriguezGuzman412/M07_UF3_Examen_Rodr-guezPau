@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')
    <h1>Web de Mascotes</h1>
    <form method="POST" action="{{ route('validate') }}" >
        @csrf
        <div>
            Nick de la mascota: <input type="text" name="nick" placeholder="nick...">
        </div>
        <div>
            Password: <input type="password" name="password" placeholder="Password...">
        </div>
        <div>
            <a href="{{ route('register') }}">Registra la teva mascota!!</a>
        </div>
        <div>
            <button type="submit" class="submitLogAdminButton">INICIAR SESIÓN</button>
        </div>
    </form>

@foreach ($errors->all() as $error)
    <div class="container">
        <li class="alert alert-danger">{{ $error }}</li>
    </div>
@endforeach
