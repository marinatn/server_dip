<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Http\Requests\OrganisationRequest;
use App\Http\Resources\OrganisationResource;
use App\Models\Organisation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrganisationController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $organisations = Organisation::paginate();

        return OrganisationResource::collection($organisations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganisationRequest $request): Organisation
    {
        return Organisation::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Organisation $organisation): Organisation
    {
        return $organisation;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganisationRequest $request, Organisation $organisation): Organisation
    {
        $organisation->update($request->validated());

        return $organisation;
    }

    public function destroy(Organisation $organisation): Response
    {
        $organisation->delete();

        return response()->noContent();
    }
}
