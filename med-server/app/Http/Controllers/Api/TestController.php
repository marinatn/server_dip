<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Models\Test;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use Illuminate\Http\Response;

class TestController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Test::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestRequest $request): Test
    {
        return Test::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Test $test): Test
    {
        return $test;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestRequest $request, Test $test): Test
    {
        $test->update($request->validated());

        return $test;
    }

    public function destroy(Test $test): Response
    {
        $test->delete();

        return response()->noContent();
    }
}
