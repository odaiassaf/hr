<?php

namespace App\Http\Controllers\API;

use App\Models\EmployeeTasks;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeTasksRequest;
use App\Http\Requests\UpdateEmployeeTasksRequest;

class EmployeeTasksController extends Controller
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
    public function store(StoreEmployeeTasksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmployeeTasks $employeeTasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeTasks $employeeTasks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeTasksRequest $request, EmployeeTasks $employeeTasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeTasks $employeeTasks)
    {
        //
    }
}
