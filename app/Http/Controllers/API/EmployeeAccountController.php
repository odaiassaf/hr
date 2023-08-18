<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers;
use App\Models\EmployeeAccount;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeAccountRequest;
use App\Http\Requests\UpdateEmployeeAccountRequest;

class EmployeeAccountController extends Controller
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
    public function store(StoreEmployeeAccountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeAccount $employeeAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeAccount $employeeAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeAccountRequest $request, EmployeeAccount $employeeAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeAccount $employeeAccount)
    {
        //
    }
}
