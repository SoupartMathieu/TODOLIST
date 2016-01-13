@extends('template')

@section('titre')
    task
@endsection



@section('contenu')
    <br>
    <div class="col-sm-offset-2 col-sm-7">
        <div class="panel panel-info" style="background-color: #cecece">
            <div class="panel-heading" style="background-color: #aaaaaa">Ajout de votre tache</div>
            <div class="panel-body">
                {!! Form::open(array('url' => '/task')) !!}
                <div class="form-group {!! $errors->has('tache') ? 'has-error' : '' !!} " style="margin-top: 25px;">
                    {!! Form::text('tache', null, array('class' => 'form-control','required' ,'placeholder' => 'Entrez votre tache','maxlength'=>'255')) !!}
                    {!! $errors->first('tache', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!} " style="margin-top: 25px;">
                    {!! Form::text('description', null, array('class' => 'form-control','required', 'placeholder' => 'Description de la tache','maxlength'=>'255')) !!}
                    {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('date') ? 'has-error' : '' !!}" style="margin-top: 25px;">

                    {!! $errors->first('date', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Envoyer !', array('class' => 'btn btn-info pull-right')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
