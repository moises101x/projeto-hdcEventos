@extends('layouts.main')

@section('title', 'dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container"> 
    <h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
        </table>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td scope="row"> {{$loop->index +1}}</td>
                    <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                </tr>
            @endforeach
        </tbody>
    @else 
        <p>Você ainda não tem evntos, <a href="/events/create ">criar evento</a></p>
    @endif
</div>

@endsection