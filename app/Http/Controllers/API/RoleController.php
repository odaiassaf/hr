<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Http\Resources\RoleResource;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return RoleResource::Collection($roles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255'
        ]);

        $role = Role::create([
            'name'=> $request->name,
        ]);
        $role->syncPermissions($request->get('permission'));
        return response()->json(['message'=> 'Role created successfully','role'=>$role],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::FindOrFail($id);
        // return RoleResource::Collection($role);
        return new RoleResource($role); 
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role= Role::FindOrFail($id);
         $request->validate([
            'name'=>'required|string|max:255'
        ]);

        $role -> update([
            'name'=> $request->name,
        ]);
        $role->syncPermissions($request->get('permission'));
        return response()->json(['message'=> 'Role created successfully','role'=>$role],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
