<?php

namespace App\Http\Controllers;

use App\Models\Facts;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts= Facts::all();
        return view('backend.pages.facts', compact('facts'));
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
        request()->validate([
            'titre' => ['required|max:25'],
            'titrePara' =>['required|max: 20'],
            'happy'=> ['required|max:100'],
            'paraHappy'=>['required|max:30'],
            'project'=> ['required|max:35'],
            'paraProject'=>['required|max:30'],
            'support'=> ['required|max:100'],
            'paraSupp'=>['required|max:35'],
            'work'=>['required|max:100'],
            'paraWork'=>['required|max:35'],
        ]);
        $store= new Facts;
        $store->titre=$request->titre;
        $store->titrePara=$request->titrePara;
        $store->happy=$request->happy;
        $store->paraHappy=$request->paraHappy;
        $store->project=$request->project;
        $store->paraProject=$request->paraProject;
        $store->support=$request->support;
        $store->paraSupp=$request->paraSupp;
        $store->work=$request->work;
        $store->paraWork=$request->paraWork;
        $store->save();
        return redirect('/dashboard/facts')->with('succes', 'creation effectif');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Facts::find($id);
        return view("backend.pages.factsCrud.factShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Facts::find($id);
        return view('backend.pages.factsCrud.factsEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            'titre' => ['required|max:25'],
            'titrePara' =>['required|max: 20'],
            'happy'=> ['required|max:100'],
            'paraHappy'=>['required|max:30'],
            'project'=> ['required|max:35'],
            'paraProject'=>'required|max:30',
            'support'=> ['required|max:100'],
            'paraSupp'=>['required|max:35'],
            'work'=>['required|max:100'],
            'paraWork'=>['required|max:35'],
        ]);

        $update =  Facts::find($id);
        $update->titre=$request->titre;
        $update->titrePara=$request->titrePara;
        $update->happy=$request->happy;
        $update->paraHappy=$request->paraHappy;
        $update->project=$request->project;
        $update->paraProject=$request->paraProject;
        $update->support=$request->support;
        $update->paraSupp=$request->paraSupp;
        $update->work=$request->work;
        $update->paraWork=$request->paraWork;
        $update->save();
        return redirect('/dashboard/facts')->with('warning', ' la modf a été effectué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Facts::find($id);
        $destroy->delete();
        return redirect("/dashboard/facts")->with('danger');
    }
}
