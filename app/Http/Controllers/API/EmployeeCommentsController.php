<?php

namespace App\Http\Controllers\API;

use App\Models\EmployeeComments;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeCommentsRequest;
use App\Http\Requests\UpdateEmployeeCommentsRequest;

class EmployeeCommentsController extends Controller
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
    public function store(StoreEmployeeCommentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeComments $employeeComments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeComments $employeeComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeCommentsRequest $request, EmployeeComments $employeeComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeComments $employeeComments)
    {
        //
    }
}
