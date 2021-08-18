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
        request()->validate([
            'titreAbout'=>['required', 'min:3','max:55'],
            'para'=>['required', 'min:3','max:500'],
            'nom'=>['required', 'min:3','max:20'],
            'prenom'=>['required', 'min:3','max:15'],
            'titre'=>['required','min:3', 'max:35'],
            'paragra'=>['required','min:3', 'max:500'],
            'img'=>['required','min:3', 'max:35'],
            'description'=>['required', 'min:3','max:500'],
            'birthday'=>['required', 'min:3','max:45'],
            'website'=>['required', 'min:3','max:55'],
            'phone'=>['required','min:3', 'max:150'],
            'city'=>['required','min:3', 'max:105'],
            'age'=>['required', 'min:3','max:35'],
            'degree'=>['required', 'min:3','max:35'],
            'freelance'=>['required', 'min:3','max:45'],
            'paragraphe'=>['required','min:3', 'max:500']
        ]);

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
        return redirect('/dashboard/about')->with('success', 'creation effectif');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        $show = $about;
        return view("backend.pages.aboutCrud.aboutShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $edit = $about;
        $edit= About::find($id);
        return view('backend.pages.aboutCrud.aboutEdit', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        request()->validate([
        'titreAbout'=>['required', 'min:3','max:55'],
        'para'=>['required','min:3', 'max:500'],
        'nom'=>['required','min:3', 'max:20'],
        'prenom'=>['required','min:3', 'max:15'],
        'titre'=>['required', 'min:3','max:35'],
        'paragra'=>['required','min:3', 'max:500'],
        'img'=>['required', 'min:3','max:35'],
        'description'=>['required','min:3', 'max:500'],
        'birthday'=>['required','min:3', 'max:45'],
        'website'=>['required','min:3', 'max:55'],
        'phone'=>['required','min:3', 'max:50'],
        'city'=>['required', 'min:3','max:105'],
        'age'=>['required','min:3', 'max:35'],
        'degree'=>['required','min:3','max:35'],
        'freelance'=>['required', 'min:3','max:45'],
        'paragraphe'=>['required','min:3', 'max:500']
    ]);

        $update = About::find($id);
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

        return redirect('/dashboard/about')->with('warning', ' la modf a été effectué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = About::find($id);
        $destroy->delete();
        return redirect("/dashboard/about")->with('danger', "effacé");
    }
}
