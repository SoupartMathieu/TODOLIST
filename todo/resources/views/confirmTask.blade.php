@extends('template')

@section('titre')
    task
    @endsection
    @section('contenu')
            <!-- {!! Form::open(['url' => 'users/task']) !!}
    {!! Form::label('tache', 'Ajouter une tache : ') !!}
    {!! Form::text('tache') !!}
    {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}-->

@section('contenu')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        <div class="panel panel-info">
            <div class="panel-heading">Attention</div>
            <div class="panel-body">
               Votre tache a été enregistrée avec succés.
            </div>
        </div>
    </div>
@endsection
