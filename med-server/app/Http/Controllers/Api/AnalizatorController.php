<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Analizator;
use Illuminate\Http\Request;
use App\Http\Requests\AnalizatorRequest;
use Illuminate\Http\Response;
use App\Http\Resources\AnalizatorResource;

class AnalizatorController extends BaseController
{

    public function index(Request $request)
    {
//        $analizators = Analizator::paginate();
//
//        return AnalizatorResource:: collection($analizators);
        return Analizator::all();
    }

    /**
     * Show the form for creating a new resource.
     */
//    public function create()
//    {
//        //
//    }


    public function store(AnalizatorRequest $request): Analizator
    {
        return Analizator::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Analizator $analizator): Analizator
    {
       return $analizator;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Analizator $analizator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnalizatorRequest $request, Analizator $analizator): Analizator
    {
        $analizator->update($request->validated());

        return $analizator;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Analizator $analizator): Response
    {
       $analizator->delete();

       return response()->noContent();
    }
}

