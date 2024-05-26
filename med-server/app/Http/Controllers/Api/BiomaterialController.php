<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Biomaterial;
use Illuminate\Http\Request;
use App\Http\Requests\BiomaterialRequest;
use Illuminate\Http\Response;
use App\Http\Resources\BiomaterialResource;

class BiomaterialController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $biomaterials = Biomaterial::paginate();
//
//        return BiomaterialResource::collection($biomaterials);
        return Biomaterial::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BiomaterialRequest $request): Biomaterial
    {
        return Biomaterial::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Biomaterial $biomaterial): Biomaterial
    {
        return $biomaterial;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BiomaterialRequest $request, Biomaterial $biomaterial): Biomaterial
    {
        $biomaterial>update($request->validated());

        return $biomaterial;
    }

    public function destroy(Biomaterial $branch): Response
    {
        $biomaterial->delete();

        return response()->noContent();
    }
}
