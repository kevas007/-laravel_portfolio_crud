<?php

namespace App\Http\Controllers;

use App\Models\PortfolioDetail;
use Illuminate\Http\Request;

class PortfolioDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details=PortfolioDetail::all();
        return view('backend.pages.portofioDetails', compact('details'));
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
            'home'=>['required', 'max:255'],
            'details'=>['required', 'max:20'],
            'image1'=>['required', 'max:15'],
            'image2'=>['required', 'max:15'],
            'image3'=>['required', 'max:15'],
            'category'=>['required', 'max:35'],
            'client'=>['required', 'max:255'],
            'projetDate'=>['required', 'max:255'],
            'projetUrl'=>['required', 'max:255'],
            'titre3'=>['required', 'max:255'],
            'para'=>['required', 'max:255'],
        ]);
        $store = new  PortfolioDetail;
        $store->titre = $request->titre;
        $store->home = $request->home;
        $store->details = $request->details;
        $store->image1 = $request->image1;
        $store->image2 = $request->image2;
        $store->image3 = $request->image3;
        $store->category = $request->category;
        $store->client = $request->client;
        $store->projetDate = $request->projetDate;
        $store->projetUrl = $request->projetUrl;
        $store->titre3 = $request->titre3;
        $store->para = $request->para;
        $store->save();
        return redirect('/dashboard')->with('success', 'PortfolioDetail a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioDetail  $portfolioDetail
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioDetail $portfolioDetail)
    {
        $show = PortfolioDetail::find($portfolioDetail->id);
        return view("backend.pages.portofioDetails", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioDetail  $portfolioDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= PortfolioDetail::find($id);
        return view('backend.pages.portfolioDetailCrud.portfoliodetail', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioDetail  $portfolioDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate([
            'titre'=>['required', 'max:35'],
            'home'=>['required', 'max:255'],
            'details'=>['required', 'max:20'],
            'image1'=>['required', 'max:15'],
            'image2'=>['required', 'max:15'],
            'image3'=>['required', 'max:15'],
            'category'=>['required', 'max:35'],
            'client'=>['required', 'max:255'],
            'projetDate'=>['required', 'max:255'],
            'projetUrl'=>['required', 'max:255'],
            'titre3'=>['required', 'max:255'],
            'para'=>['required', 'max:255'],
        ]);
        $update = PortfolioDetail::find($id);
        $update->titre = $request->titre;
        $update->home = $request->home;
        $update->details = $request->details;
        $update->image1 = $request->image1;
        $update->image2 = $request->image2;
        $update->image3 = $request->image3;
        $update->category = $request->category;
        $update->client = $request->client;
        $update->projetDate = $request->projetDate;
        $update->projetUrl = $request->projetUrl;
        $update->titre3 = $request->titre3;
        $update->para = $request->para;
        $update->save();
        return redirect('/dashboard')->with('warning', ' la modf a été effectué');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioDetail  $portfolioDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $destroy = PortfolioDetail::find($id);
        $destroy->delete();
        return redirect("/dashboard")->with('danger', "effacé");
    }
}
