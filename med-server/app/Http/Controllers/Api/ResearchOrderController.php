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

        return ResearchOrder::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResearchOrderRequest $request): ResearchOrder
    {
        $researchOrder = ResearchOrder::create($request->all());
        $researchOrder['bar_code'] = $this->getBarCode($researchOrder);
        return $researchOrder;
    }

    /**
     * Display the specified resource.
     */
    public function show(ResearchOrder $researchOrder): ResearchOrder
    {
        $researchOrder['bar_code'] = $this->getBarCode($researchOrder);
        return $researchOrder;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResearchOrderRequest $request, ResearchOrder $researchOrder): ResearchOrder
    {
        $researchOrder->update($request->validated());
        $researchOrder['bar_code'] = $this->getBarCode($researchOrder);
        return $researchOrder;
    }

    public function destroy(ResearchOrder $researchOrder): Response
    {
        $researchOrder->delete();

        return response()->noContent();
    }

    private function getBarCode(ResearchOrder $researchOrder)
    {
        return $researchOrder['id']
            . '  ' .
            $researchOrder['patient_id'] . '  ' .
            implode(' ', json_decode($researchOrder['researches'])) . '  ' .
            date_format($researchOrder['created_at'], 'U')
            ;
    }
}
