<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use Illuminate\Http\Response;
use App\Http\Resources\DoctorResource;

class DoctorController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $doctors = Doctor::paginate();

        return DoctorResource::collection($doctors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request): Doctor
    {
        return Doctor::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor): Doctor
    {
        return $doctor;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorRequest $request, Doctor $doctor): Doctor
    {
        $doctor->update($request->validated());

        return $doctor;
    }

    public function destroy(Doctor $doctor): Response
    {
        $doctor->delete();

        return response()->noContent();
    }
}
