<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\ResearchOrder;
use Illuminate\Http\Request;
use App\Http\Requests\ResearchOrderRequest;
use Illuminate\Http\Response;
use App\Http\Resources\ResearchOrderResource;

class ResearchOrderController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $researchOrders = ResearchOrder::paginate();

        return ResearchOrderResource::collection($researchOrders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResearchOrderRequest $request): ResearchOrder
    {
        return ResearchOrder::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ResearchOrder $researchOrder): ResearchOrder
    {
        return $researchOrder;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResearchOrderRequest $request, ResearchOrder $researchOrder): ResearchOrder
    {
        $researchOrder->update($request->validated());

        return $researchOrder;
    }

    public function destroy(ResearchOrder $researchOrder): Response
    {
        $researchOrder->delete();

        return response()->noContent();
    }
}
