<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Requests\EquipmentRequest;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\EquipmentResource;

class EquipmentController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $equipments = Equipment::paginate();
//
//        return DoctorResource::collection($doctors);
        return Equipment:: all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipmentRequest $request): Equipment
    {
        return Equipment::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipment $equipment): Equipment
    {
        return $equipment;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipmentRequest $request, Equipment $equipment): Equipment
    {
        $equipment->update($request->validated());

        return $equipment;
    }

    public function destroy(Equipment $equipment): Response
    {
        $equipment->delete();

        return response()->noContent();
    }
}
