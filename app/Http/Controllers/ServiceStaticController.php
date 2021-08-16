<?php

namespace App\Http\Controllers;

use App\Models\ServiceStatic;
use Illuminate\Http\Request;

class ServiceStaticController extends Controller
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
            "titre" => ["required"],
            "description" => ["required"],
        ]);
        $store = new ServiceStatic;
        $store->titre = $request->titre;
        $store->description = $request->description;
        $store->icon = $request->icon;
        $store->save();
        return redirect('dashboard/services')->with('success', 'Portfolio créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceStatic  $serviceStatic
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceStatic $serviceStatic)
    {
        // $show= ServiceStatic::find($serviceStatic->id);
        // return view("backend.pages.servicesCrud.servicesShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceStatic  $serviceStatic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit= ServiceStatic::find($id);
        return view('backend.pages.ServicesStact.servicesEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceStatic  $serviceStatic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
        ]);
        $update = ServiceStatic ::find($id);
        $update->titre = $request->titre;
        $update->description = $request->description;
        $update->save();
        return redirect('dashboard/services')->with('warning', 'Service updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceStatic  $serviceStatic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = ServiceStatic ::find($id);
        $destroy->delete();
        return redirect("/dashboard/services")->with('danger', 'effacé');
    }
}
