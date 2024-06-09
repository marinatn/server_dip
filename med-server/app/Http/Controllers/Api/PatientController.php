<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\Patient;

class PatientController extends  BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Patient::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request): Patient
    {
        //
        return Patient::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient): Patient
    {
        //
        return $patient;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $patient): Patient
    {
        $patient->update($request->validated());

        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return response()->noContent();
    }
}
