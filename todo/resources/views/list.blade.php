@extends('template')

@section('titre')
Liste
@endsection

@section('contenu')
    <h1>Mes listes</h1>

    @foreach($tasks as $task)
       <h2>{{$task->name}}</h2>
       <p>{{$task->descriptionTache}}</p>
    @endforeach
@endsection