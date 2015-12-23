<?php

namespace App\Http\Controllers;

use App\task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('task');
    }

    public function getTask()
    {
        return view('task');
    }

    public function postTask(Request $request)
    {

        //ici écriture dans la BDD de ma form tache
        $input = $request->all();
        $tache=new Task();
        $tache->user_id="1";
        $tache->name =$request->input('tache');
        $tache->descriptionTache =$request->input('description');
        $tache->fini="0";
       // return 'Votre tache est ' . $request->input('tache');
        //$tache->task =$request->input('tache');
        $tache->save();
       \ Session::flash('flash_message','Enregistrée avec succés');
        return redirect('/');

    }

    public function delete($id)
    {
        $tache=new Task();
        $tache = Task::find($id);
        $tache->delete();
        return redirect('/list');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
