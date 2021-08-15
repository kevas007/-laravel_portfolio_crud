<?php

namespace App\Http\Controllers;

use App\Models\Skillstatic;
use Illuminate\Http\Request;

class SkillstaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


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
            'titre'=> 'required|max:25',
            'description'=> 'required|max:255',
        ]);
        $store = new Skillstatic();
        $store->titre = request('titre');
        $store->description = request('description');
        $store->save();
        return redirect('dashboard/skills')->with('success', 'Skills ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skillstatic  $skillstatic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Skillstatic::find($id);
        return view("backend.pages.skillsStatic.skillsShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skillstatic  $skillstatic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Skillstatic::find($id);
        return view('backend.pages.skillsStatic.skillsEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skillstatic  $skillstatic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        request()->validate([
            'titre'=> 'required|max:25',
            'description'=> 'required|max:255',
        ]);
        $update = Skillstatic::find($id);
        $update->titre = $request->titre;
        $update->description = $request->description;
        $update->save();
        return redirect('dashboard/skills')->with('warning', ' la modf a été effectué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skillstatic  $skillstatic
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = Skillstatic ::find($id);
        $destroy->delete();
        return redirect("/dashboard/skil")->with('danger', "effacé");
    }
}
