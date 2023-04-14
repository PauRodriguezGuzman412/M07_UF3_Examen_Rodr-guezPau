@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')

    <div>
        <table border>
        <thead>
            <th>Nom de la possible parella</th>
            <th>Edat</th>
            <th>Color</th>
            <th>Nom del seu humà</th>
            <th>Telèfon del seu humà</th>
            <th>Fotos</th>
        </thead>
            @foreach ($mascotas as $key => $mascota)
                <tr>
                    <td>{{ $mascota->nick }}</td>
                    <td>{{ $mascota->edat }}</td>
                    <td>{{ $mascota->color }}</td>
                    <td>{{ $mascota->nom_huma }}</td>
                    <td>{{ $mascota->telefon_huma }}</td>
                    <td>
                        <a href="{{ route('foto',['foto' => $mascota->foto]) }}">Veure foto</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@section('footer')
@include('layout.footer')
