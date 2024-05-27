<?php

namespace App\Http\Controllers\Api;

use App\Models\Point;
use Illuminate\Http\Request;
use App\Http\Requests\PointRequest;
use Illuminate\Routing\Controller;

class PointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $point)
    {
//        $research = Research::paginate();
//
//        return ResearchResource::collection($research);
        return Point::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PointRequest $point): Point
    {
        return Point::create($point->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Point $point): Point
    {
        return $point;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PointRequest $request, Point $point): Point
    {
        $point->update($request->validated());

        return $point;
    }

    public function destroy(Point $point): Point
    {
        $point->delete();

        return point()->noContent();
    }
}
