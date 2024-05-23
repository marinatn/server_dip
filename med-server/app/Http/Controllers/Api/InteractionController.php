<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Interaction;
use Illuminate\Http\Request;
use App\Http\Requests\InteractionRequest;
use Illuminate\Http\Response;
use App\Http\Resources\InteractionResource;

class InteractionController extends BaseController
{

    public function index(Request $request)
    {
//        $Interactions = Interaction::paginate();
//
//        return InteractionResource:: collection($Interactions);
        return Interaction::all();
    }

    /**
     * Show the form for creating a new resource.
     */
//    public function create()
//    {
//        //
//    }


    public function store(InteractionRequest $request): Interaction
    {
        return Interaction::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Interaction $Interaction): Interaction
    {
        return $Interaction;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interaction $Interaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InteractionRequest $request, Interaction $Interaction): Interaction
    {
        $Interaction->update($request->validated());

        return $Interaction;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interaction $Interaction): Response
    {
        $Interaction->delete();

        return response()->noContent;
    }
}

