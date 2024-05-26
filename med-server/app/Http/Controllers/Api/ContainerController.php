<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Container;
use Illuminate\Http\Request;
use App\Http\Requests\ContainerRequest;
use Illuminate\Http\Response;
use App\Http\Resources\ContainerResource;

class ContainerController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        $containers = Container::paginate();
//
//        return ContainerResource::collection($containers);
        return Container::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContainerRequest $request): Container
    {
        return Container::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Container $container): Container
    {
        return $container;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContainerRequest $request, Container $container): Container
    {
        $container->update($request->validated());

        return $container;
    }

    public function destroy(Container $container): Response
    {
        $container->delete();

        return response()->noContent();
    }
}
