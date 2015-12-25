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
    .bordure
    {
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
    }
#row
{
    margin-left:0;
    margin-right:0;
}
</style>
@section('contenu')

    <h1>Mes listes de taches</h1>
    <div class="row" id="row" style="margin-left:0;margin-right:0;" >

        @foreach($tasks as $task)
            <div class="bordure">
                <div class="col-md-4 portfolio-item">
                    <h3 class="titre_tache"> <a class="lien" id="{{$task->id}}" href="{{URL::to('/NewTask/'.$task->id)}}">{{$task->name}}</a>
                        <a type="button" style="margin-top:2px;float: right;margin-right: 10px;" class="btn btn-primary btn-sm" href="{{URL::to('/update/'.$task->id)}}">Edit</a>
                    </h3>
                    <p>{{$task->descriptionTache}}

                    </p>

                </div>
                @endforeach
            </div>

    </div>
@endsection