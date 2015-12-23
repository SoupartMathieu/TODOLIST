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

    }
    .titre_tache{
        padding-bottom: 2px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        background-color: dodgerblue;
        margin-bottom: 0;
        height: 35px;

        text-align: center;
    }
    .lien{
margin-right: -110px;
text-decoration: none;
        color: black;
    }
    h1
    {
        text-align: center;
    }
    p{text-align: center;
        margin-top: -15px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        background: #46b8da;
    }

</style>
@section('contenu')
    <h1>Mes listes de taches</h1>
    <div class="row">
    @foreach($tasks as $task)
            <div class="col-md-3 portfolio-item">
      <h3 class="titre_tache"> <a class="lien" id="{{$task->id}}" href="{{URL::to('/AjoutTache/'.$task->id)}}">{{$task->name}}</a> <a type="button" style="float: right;margin-right: 10px;" class="btn btn-primary btn-sm" href="{{URL::to('/update/'.$task->id)}}">Edit</a> <a type="button" style="float: right;margin-right: 3px;" class="btn btn-danger btn-sm" href="{{URL::to('/Delete/'.$task->id)}}">Delete</a></h3>
       <p>{{$task->descriptionTache}}</p>
                </div>
    @endforeach
    </div>
@endsection