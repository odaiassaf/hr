<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EmploymentAnnouncement;
use App\Http\Resources\EmploymentAnnouncementResource;

class AnnocementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annocement= EmploymentAnnouncement::all();
        return EmploymentAnnouncementResource::collection($annocement);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
