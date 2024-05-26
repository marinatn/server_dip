<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Sample;
use Illuminate\Http\Request;
use App\Http\Requests\SampleRequest;
use Illuminate\Http\Response;
use App\Http\Resources\SampleResource;

class SampleController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $samples = Sample::paginate();

        return SampleResource::collection($samples);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SampleRequest $request): Sample
    {
        return Sample::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Sample $sample): Sample
    {
        return $sample;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SampleRequest $request, Sample $sample): Sample
    {
        $sample->update($request->validated());

        return $sample;
    }

    public function destroy(Sample $sample): Response
    {
        $sample->delete();

        return response()->noContent();
    }
}
