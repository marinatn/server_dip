<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreRiskRequest;
use App\Http\Requests\UpdateRiskRequest;
use App\Models\Risk;

class RiskController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Risk::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRiskRequest $request): Risk
    {
        //
        return Risk::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Risk $risk): Risk
    {
        //
        return $risk;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRiskRequest $request, Risk $risk): Risk
    {
        $risk->update($request->validated());

        return $risk;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Risk $risk)
    {
        $risk->delete();

        return response()->noContent();
    }
}
