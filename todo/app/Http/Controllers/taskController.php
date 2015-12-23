<?php

namespace App\Http\Controllers;

use App\task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

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
         return redirect('/')->with('flash_message','Ajouté avec succés');

    }

    public function delete($id)
    {
        $tache=new Task();
        $tache = Task::find($id);
        $tache->delete();
        //session()->flash('flash_message','Suprimé avec succés');

        return redirect('/list')->with('flash_message','Suprimé avec succés');
    }

    public function edit(Request $request,$id)
    {
        //ici écriture dans la BDD de ma form tache
        $input = $request->all();
        $tache=new Task();
        $tache = Task::find($id);
        $tache->user_id="1";//////temporairre
        $tache->name =$request->input('tache');
        $tache->descriptionTache =$request->input('description');
        $tache->fini="0";

        $tache->update();
        return redirect('/list')->with('flash_message','Mise à jour réussie');

    }

    public function viewEdit($id)
    {
        $id=$id;
return view('/update',compact('id'));
        /*if ($id==0 || $id=="")
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
            //   return $id." ".$tasks;
            return view('update')->with('tasks',$tasks);
        }*/

        //return redirect('/update');
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
