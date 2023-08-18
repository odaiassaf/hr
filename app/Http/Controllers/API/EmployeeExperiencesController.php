<?php

namespace App\Http\Controllers\API;

use App\Models\EmployeeExperiences;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeExperiencesRequest;
use App\Http\Requests\UpdateEmployeeExperiencesRequest;

class EmployeeExperiencesController extends Controller
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
    public function store(StoreEmployeeExperiencesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeExperiences $employeeExperiences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeExperiences $employeeExperiences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeExperiencesRequest $request, EmployeeExperiences $employeeExperiences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeExperiences $employeeExperiences)
    {
        //
    }
}
