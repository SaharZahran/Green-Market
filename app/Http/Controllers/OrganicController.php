<?php

namespace App\Http\Controllers;

use App\Models\Organic;
use App\Http\Requests\StoreOrganicRequest;
use App\Http\Requests\UpdateOrganicRequest;

class OrganicController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrganicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrganicRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organic  $organic
     * @return \Illuminate\Http\Response
     */
    public function show(Organic $organic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organic  $organic
     * @return \Illuminate\Http\Response
     */
    public function edit(Organic $organic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrganicRequest  $request
     * @param  \App\Models\Organic  $organic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrganicRequest $request, Organic $organic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organic  $organic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organic $organic)
    {
        //
    }
}
