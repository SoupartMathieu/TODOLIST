<?php

namespace App\Http\Controllers;

use App\Liste;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Task;

class AddTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if ($id==0 || $id=="")
        {
            return view('errorUrl');
        }

        else
        {
            $tasks= Task::find($id);
                    if (is_null($tasks))
                {
                    return view('errorUrl');
                }
           // return $id." ".$tasks;
          // return view('update')->with('tasks',$tasks);
        }
        //return $id;
    }

    public function erreur()
    {
        return view('errorUrl');

    }

    public function AddSousTaches(Request $request,$id)
    {
        $id=$id;
return view('NewSousTache',compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTaches(Request $request,$id)
    {

        //ici écriture dans la BDD de ma form tache
        $input = $request->all();
        $tache=new Liste();
        $tache->task_id="1";
        $tache->name =$request->input('SousTache');
        $tache->DateCrea =$request->input('dateFin');
        $tache->Accompli="0";
        // return 'Votre tache est ' . $request->input('tache');
        //$tache->task =$request->input('tache');
        $tache->save();
        return redirect('/list')->with('flash_message','Sous-tache ajoutée avec succés');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
