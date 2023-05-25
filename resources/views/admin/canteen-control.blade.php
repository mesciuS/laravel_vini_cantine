@extends('layouts/main')
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Indirizzo</th>
            <th>Città</th>
            <th>Provincia</th>
            <th>Regione</th>
            <th>Nazione</th>
            <th>Telefono</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach ($canteens as $canteen)   
            <tr>
                <td>{{$canteen->name}}</td>
                <td>{{$canteen->address}}</td>
                <td>{{$canteen->town}}</td>
                <td>{{$canteen->province}}</td>
                <td>{{$canteen->region}}</td>
                <td>{{$canteen->nation}}</td>
                <td>{{$canteen->telephon}}</td>
                <td>{{$canteen->email}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        {{-- {{dd($wines)}}; --}}
    </div>
    @endsection