<?php

namespace App\Http\Controllers\Api;

use App\Models\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentsResource;
use App\Http\Requests\StoreDepartmentsRequest;
use App\Http\Requests\UpdateDepartmentsRequest;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = Departments::all();
        return DepartmentsResource::Collection($department);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartmentsRequest $request)
    {
        $department = Departments::create($request->all());
        $departmentResource = new DepartmentsResource($department);
         return response()->json($departmentResource);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = Departments::findOrFail($id);
         $departmentResource = new DepartmentsResource($department);
         return response()->json($departmentResource);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartmentsRequest $request, Departments $department)
    {
        $department->update($request->all());   
        $departmentResource = new DepartmentsResource($department);
         return response()->json($departmentResource);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Departments::FindOrFail($id);
        $department->delete();
         return response()->json([
        'message' => 'Department deleted successfully',
    ]);
    }
}
