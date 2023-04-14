@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')

    @if (Session::get('nick') !== null)
        <span>Foto de {{ $nick }}</span>
        <div>
            <img src="{{ asset($foto) }}" alt="foto.png" width="100px" height="100px">
        </div>
        <a href="{{ route('index') }}">Atrás</a>
    @else
        <meta http-equiv="Refresh" content="0; url={{ route('login') }}"/>
    @endif
