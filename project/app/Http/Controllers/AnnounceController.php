<?php

namespace App\Http\Controllers;

use App\Models\announce;
use App\Http\Requests\StoreannounceRequest;
use App\Http\Requests\UpdateannounceRequest;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreannounceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(announce $announce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(announce $announce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateannounceRequest $request, announce $announce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(announce $announce)
    {
        //
    }
}
