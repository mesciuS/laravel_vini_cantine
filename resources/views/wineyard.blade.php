@extends('layouts/main')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Descrizione</th>
        </thead>
        <tbody>
            @foreach ($wineyards as $wineyard)   
            <tr>
                <td>{{$wineyard->name}}</td>
                <td>{{$wineyard->description}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{-- {{dd($wines)}}; --}}
    </div>
@endsection