<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.service');
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
            "icon" => ["required"],
        ]);

        $store = new Service;
        $store->titre = $request->titre;
        $store->description = $request->description;
        $store->icon = $request->icon;
        $store->save();
        return redirect('dashboard/services')->with('success', 'Portfolio créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show= Service ::find($id);
        return view("backend.pages.servicesCrud.servicesShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $edit= Service::find($id);
        return view('backend.pages.servicesCrud.servicesEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "icon" => ["required"],
        ]);
        $update = Service::find($service->id);
        $update->titre = $request->titre;
        $update->description = $request->description;
        $update->icon = $request->icon;
        $update->save();

        return redirect('dashboard/services')->with('warning', 'Service updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $destroy = Service::find($service->id);
        $destroy->delete();
        return redirect("/dashboard/services")->with('danger', 'effacé');
    }
}
