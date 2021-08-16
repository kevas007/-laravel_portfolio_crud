<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('backend.pages.contact', compact('contacts'));
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
            'titre'=>['required', 'max:35'],
            'description'=>['required', 'max:255'],
            'locationTitre'=>['required', 'max:20'],
            'location'=>['required', 'max:15'],
            'emailTitre'=>['required', 'max:35'],
            'email'=>['required', 'max:255']
        ]);
        $store = new Contact;
        $store->titre = $request->titre;
        $store->description = $request->description;
        $store->locationTitre = $request->locationTitre;
        $store->location = $request->location;
        $store->emailTitre = $request->emailTitre;
        $store->email = $request->email;
        $store->save();
        return redirect()->route('backend.pages.contact')->with('success', 'creation effectif');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= Contact::find($id);
        return view('backend.pages.contactCrud.contactEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'titre'=>['required', 'max:35'],
            'description'=>['required', 'max:255'],
            'locationTitre'=>['required', 'max:20'],
            'location'=>['required', 'max:15'],
            'emailTitre'=>['required', 'max:35'],
            'email'=>['required', 'max:255']
        ]);
        $update = Contact::find($id);
        $update->titre = $request->titre;
        $update->description = $request->description;
        $update->locationTitre = $request->locationTitre;
        $update->location = $request->location;
        $update->emailTitre = $request->emailTitre;
        $update->email = $request->email;
        $update->save();
        return redirect()->route('backend.pages.contact')->with('warning', ' la modf a été effectué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Contact::find($id);
        $destroy->delete();
        return redirect("/dashboard/about")->with('danger', "effacé");
    }
}
