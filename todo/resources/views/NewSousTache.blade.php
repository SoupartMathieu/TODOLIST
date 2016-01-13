@extends('template')

@section('titre')
    Ajout d'une sous-tache

@endsection


@section('contenu')
    <br>
    <div class="col-sm-offset-2 col-sm-7">
        <div class="panel panel-info" style="background-color: #cecece">
            <div class="panel-heading">Ajout de votre sous-tache</div>
            <div class="panel-body">
                {!! Form::open(array('url' => '/AddNewTask/'.$id)) !!}
                <div class="form-group {!! $errors->has('SousTache') ? 'has-error' : '' !!}" style="margin-top: 25px;">
                    {!! Form::text('SousTache', null, array('class' => 'form-control','required' ,'placeholder' => 'Nom de la sous-tache','maxlength'=>'255')) !!}
                    {!! $errors->first('SousTache', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="form-group {!! $errors->has('dateFin') ? 'has-error' : '' !!}" style="margin-top: 25px;">
                    {!! Form::label('date', 'Date de fin', array('class' => 'dateFinal')) !!}
                    {!! Form::date('dateFin', null, array('id'=>'datepicker','class' => 'form-control','required')) !!}
                    {!! $errors->first('dateFin', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Enregistrer ', array('class' => 'btn btn-info pull-right')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
