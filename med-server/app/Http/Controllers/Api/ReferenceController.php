<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreReferenceRequest;
use App\Http\Requests\UpdateReferenceRequest;
use App\Models\Reference;

class ReferenceController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Reference::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReferenceRequest $request): Reference
    {
        //
        return Reference::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Reference $reference): Reference
    {
        //
        return $reference;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReferenceRequest $request, Reference $reference): Reference
    {
        $reference->update($request->validated());

        return $reference;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reference $reference)
    {
        $reference->delete();

        return response()->noContent();
    }
}
