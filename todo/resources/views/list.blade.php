@extends('template')

@section('titre')
Liste
@endsection
<style>
    .portfolio-item {
        margin-bottom: 20px;
        margin-left:auto;
        margin-right: auto;
        max-width: 400px;
        text-align: center;
    }
    .titre_tache{
        padding-bottom: 2px;
        border-radius: 10px;
        background-color: dodgerblue;
        margin-bottom: 0;
    }
    .lien{

text-decoration: none;
        color: black;
    }
    h1
    {
        text-align: center;
    }
    p{
        margin-top: -15px;
        border-radius: 10px;
        background: #46b8da;
    }

</style>
@section('contenu')
    <h1>Mes listes de taches</h1>
    <div class="row">
    @foreach($tasks as $task)
            <div class="col-md-3 portfolio-item">
      <h3 class="titre_tache"> <a class="lien" id="{{$task->id}}" href="{{URL::to('/AjoutTache/'.$task->id)}}">{{$task->name}}</a></h3>
       <p>{{$task->descriptionTache}}</p>
                </div>
    @endforeach
    </div>
@endsection