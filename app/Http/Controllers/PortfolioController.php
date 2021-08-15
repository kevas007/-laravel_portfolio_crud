<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio= Portfolio::all();
        return view('backend.pages.portfolio', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.portfolioCrud.portfolioCreate');
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
            'title' => 'required|max:25',
            'filter'=>'required|max:50',
            'lien'=> 'required|max:50'
        ]);
        $store = new Portfolio;
        $store->title = $request->title;
        $store->filter = $request->filter;
        $store->lien = $request->lien;
        $store->save();
        return redirect()->route('/dashboard/portfolio')->with('success', 'Portfolio créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        $show = $portfolio;
        return view("backend.pages.portfolioCrud.portfolioShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit= Portfolio::find($id);
        return view('backend.pages.portfolioCrud.portfolioEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        request()->validate([
            'title' => 'required|max:25',
            'filter'=>'required|max:50',
            'lien'=> 'required|max:50'
        ]);
        $update = new Portfolio;
        $update->title = $request->title;
        $update->filter = $request->filter;
        $update->lien = $request->lien;
        $update->save();
        return redirect()->route('/dashboard/portfolio')->with('warning', ' la modf a été effectué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $destroy = Portfolio::find($id);
        $destroy->delete();
        return redirect("/dashboard/portfolio")->with('danger', 'effacé');
    }
}
