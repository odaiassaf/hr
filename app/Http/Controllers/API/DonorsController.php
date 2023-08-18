<?php

namespace App\Http\Controllers\API;

use App\Models\Donors;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDonorsRequest;
use App\Http\Requests\UpdateDonorsRequest;

class DonorsController extends Controller
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
    public function store(StoreDonorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Donors $donors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donors $donors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonorsRequest $request, Donors $donors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donors $donors)
    {
        //
    }
}
