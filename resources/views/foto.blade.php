@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')

    <span>Foto de {{ Session::get('nick') }}</span>
    <div>
        <img src="{{ $foto }}" alt="foto.png">
    </div>

