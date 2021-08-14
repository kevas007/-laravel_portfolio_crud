<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts= About::all();
        return view('backend.pages.abouts', compact('abouts'));
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
        $store = new About;
        $store->titreAbout = $request->titreAbout;
        $store->para = $request->para;
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->titre = $request->titre;
        $store->paragra = $request->paragra;
        $store->img = $request->img;
        $store->description = $request->description;
        $store->birthday = $request->birthday;
        $store->website = $request->website;
        $store->phone = $request->phone;
        $store->city = $request->city;
        $store->age = $request->age;
        $store->degree = $request->degree;
        $store->email = $request->email;
        $store->freelance = $request->freelance;
        $store->paragraphe = $request->paragraphe;
        $store->save();
        return redirect('/dashboard/about');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about, $id)
    {
        $show = About::find($id);
        return view("backend.pages.aboutCrud.aboutShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about, $id)
    {
        $edit = About::find($id);
        return view('backend.pages.aboutCrud.aboutEdit', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $update = new About;
        $update->titreAbout = $request->titreAbout;
        $update->para = $request->para;
        $update->nom = $request->nom;
        $update->prenom = $request->prenom;
        $update->titre = $request->titre;
        $update->paragra = $request->paragra;
        $update->img = $request->img;
        $update->description = $request->description;
        $update->birthday = $request->birthday;
        $update->website = $request->website;
        $update->phone = $request->phone;
        $update->city = $request->city;
        $update->age = $request->age;
        $update->degree = $request->degree;
        $update->email = $request->email;
        $update->freelance = $request->freelance;
        $update->paragraphe = $request->paragraphe;
        $update->save();
        return redirect('/about');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about, $id)
    {
        $destroy = About::find($id);
        $destroy->delete();
        return redirect("/dashboard/about ");
    }
}
