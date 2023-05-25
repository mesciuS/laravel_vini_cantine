@extends('layouts/main')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Annata</th>
            <th>Cantina</th>
            <th>Colore</th>
            <th>Tipologia</th>
            <th>Gradazione</th>
            <th>Estratto</th>
            <th>Acidità</th>
        </thead>
        <tbody>
            @foreach ($wines as $wine)   
            <tr>
                <td>{{$wine->name}}</td>
                <td>{{$wine->year}}</td>
                <td>{{$wine->winemaker}}</td>
                <td>{{$wine->color}}</td>
                <td>{{$wine->type}}</td>
                <td>{{$wine->volume}}</td>
                <td>{{$wine->extract}}</td>
                <td>{{$wine->acidity}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{-- {{dd($wines)}}; --}}
    </div>
    @endsection