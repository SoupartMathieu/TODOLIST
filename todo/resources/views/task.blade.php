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
    <div class="col-sm-offset-2 col-sm-7">
        <div class="panel panel-info">
            <div class="panel-heading">Ajout de votre tache</div>
            <div class="panel-body">
                {!! Form::open(array('url' => 'users/task')) !!}
                <div class="form-group {!! $errors->has('tache') ? 'has-error' : '' !!}">
                    {!! Form::text('tache', null, array('class' => 'form-control','required' ,'placeholder' => 'Entrez votre tache')) !!}
                    {!! $errors->first('tache', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                    {!! Form::text('description', null, array('class' => 'form-control','required', 'placeholder' => 'Entrez la description de la tache')) !!}
                    {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('date') ? 'has-error' : '' !!}">

                    {!! $errors->first('date', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Envoyer !', array('class' => 'btn btn-info pull-right')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
