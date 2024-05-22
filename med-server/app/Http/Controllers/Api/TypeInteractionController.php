<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\TypeInteractionRequest;
use Illuminate\Http\Response;
use App\Http\Resources\TypeInteractionResource;

class TypeInteractionController
{
    public function index(Request $request)
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
    public function store(Storetype_interactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(type_interaction $type_interaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(type_interaction $type_interaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatetype_interactionRequest $request, type_interaction $type_interaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(type_interaction $type_interaction)
    {
        //
    }
}
