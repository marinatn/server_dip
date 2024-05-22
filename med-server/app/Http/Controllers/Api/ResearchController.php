<?php

namespace App\Http\Controllers\Api;

use App\Models\Research;
use Illuminate\Http\Request;
use App\Http\Requests\ResearchRequest;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $research = Research::paginate();
//
//        return ResearchResource::collection($research);
        return Research::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResearchRequest $request): Research
    {
        return Research::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Research $research): Research
    {
        return $research;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResearchRequest $request, Research $research): Research
    {
        $research->update($request->validated());

        return $research;
    }

    public function destroy(Research $research): Response
    {
        $research->delete();

        return response()->noContent();
    }
}
