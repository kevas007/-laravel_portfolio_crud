<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
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
        return view('backend.pages.skillsCrud.skillsCreate');
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
            'title' => ['required','max:25'],
            'value'=>['required', 'integer' ,'between:0,100'],
        ]);
        $store = new Skill;
        $store->title = $request->title;
        $store->value = $request->value;
        $store->save();

        return redirect('/dashboard/skills')->with('success', 'Skill créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $show = Skill::find($id);
        return view("backend.pages.skillsCrud.skillsShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Skill::find($id);
        return view('backend.pages.skillsCrud.skillsEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => ['required','max:25'],
            'value'=>['required', 'integer' ,'between:0,100' ],
        ]);
        $update = Skill::find($id);
        $update->title = $request->title;
        $update->value = $request->value;
        $update->save();
        return redirect('/dashboard/skills')->with('warning', ' la modf a été effectué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Skill::find($id);
        $destroy->delete();
        return redirect("/dashboard/skills")->with('danger', 'effacé');
    }
}
