<?php

namespace App\Http\Controllers;

use App\Models\PortfolioStatique;
use Illuminate\Http\Request;

class PortfolioStatiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolioStatique= PortfolioStatique::all();
        return view('backend.pages.portfolio', compact('portfolioStatique'));
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
            'titre' => 'required|max:25',
            'paragraphe'=>'required|max:255'
        ]);
        $store= new PortfolioStatique;
        $store->titre=$request->titre;
        $store->paragraphe=$request->paragraphe;
        $store->save();
        return redirect()->route('/dashboard/portfolio')->with('success', 'PortfolioStatique ajouté avec succès');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioStatique  $portfolioStatique
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioStatique $portfolioStatique)
    {
        $show = $portfolioStatique;
        return view("backend.pages.portfolioStatic.portfolioStaticShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioStatique  $portfolioStatique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= PortfolioStatique::find($id);
        return view('backend.pages.portfolioStatic.portfolioStaticEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioStatique  $portfolioStatique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioStatique $portfolioStatique)
    {
        request()->validate([
            'titre' => 'required|max:25',
            'paragraphe'=>'required|max:255'
        ]);
        $update = new PortfolioStatique;
        $update->titre=$request->titre;
        $update->paragraphe=$request->paragraphe;
        $update->save();
        return redirect()->route('/dashboard/portfolio')->with('warning', ' la modf a été effectué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioStatique  $portfolioStatique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = PortfolioStatique::find($id);
        $destroy->delete();
        return redirect("/dashboard/portfolio")->with('danger', "effacé");
    }
}
