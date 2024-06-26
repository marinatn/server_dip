<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Models\Patient;
use App\Models\Reference;
use App\Models\Research;
use App\Models\ResearchOrder;
use App\Models\Result;
use App\Models\Risk;
use App\Models\Test;
use ArrayObject;

class ResultController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Result::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        $answer = [];
        $order = ResearchOrder::find($result)->first();
        $researchesIds = json_decode($order->researches);

        $patient = Patient::find($order->patient_id);
        $patRisks = json_decode($patient->risks);
        $answer['order'] = $order;
        $answer['patient'] = $patient;
        $answer['results_research'] = [];
        $answer['results_test'] = [];
        $answer['results_refs'] = [];
        foreach ($patRisks as $patRisk) {
            $risk = Risk::find($patRisk);
            $answer['risks'][] = $risk;
        }
//        $answer['risks'] = $researchesIds;

        if (!empty($researchesIds)) {
            foreach ($researchesIds as $researchId) {
                $research = Research::find($researchId);
//                $answer['researches'][$researchId] = $research;
                $testsIds = json_decode($research->tests);
                if (!array_key_exists($researchId,  $answer['results_research'])) {
                    $answer['results_research'][$researchId] = $research;
                }
                if (!empty($testsIds)) {
                    foreach ($testsIds as $testId) {
                        $test = Test::find($testId);
                        if (!array_key_exists($testId,  $answer['results_test'])) {
                            $answer['results_test'][$testId] = $test;
                        }
                        $refsIds = json_decode($test->refs);
                        foreach ($refsIds as $key => $refId) {
                            if (!empty($refId)){
                                $ref = Reference::find($refId);
                                if (!array_key_exists($key,  $answer['results_refs'])) {
                                    $answer['results_refs'][$key] = $ref;
                                }
                            }

                        }
                    }
                }

            }
        }

        return $answer;
    }
}
