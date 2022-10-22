<?php

namespace App\Http\Controllers;

use App\Models\igm_lanka_do;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IgmLankaDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(igm_lanka_do::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            '*' => 'required',
            'bill_of_landing_id' => 'integer',
            'client_id_forwarding_agent' => 'integer',
            'client_id_consignee' => 'integer',
            'do_expire' => 'date|date_format:Y-m-d',
            'igm_india_voyage_id' => 'integer',
            'date_issue' => 'date|date_format:Y-m-d',
            'vendor_id_warhouse' => 'integer',
            'port_id_loading' => 'integer',
            'number_pkg' => 'integer',
            'twft' => 'integer',
            'foft' => 'integer',
            'foft_over' => 'integer',
            'vendor_id_yard' => 'integer',
            'deleted' => 'integer',
        );

        $validator = validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            igm_lanka_do::create($request->all());
            return response()->json(["success" => "Saved Successfully"], 201);
        } catch (\Throwable $th) {
            return response()->json(["error" => "Something wrong"], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\igm_lanka_do  $igm_lanka_do
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(igm_lanka_do::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\igm_lanka_do  $igm_lanka_do
     * @return \Illuminate\Http\Response
     */
    public function edit(igm_lanka_do $igm_lanka_do)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\igm_lanka_do  $igm_lanka_do
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igm_lanka_do $igm_lanka_do)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\igm_lanka_do  $igm_lanka_do
     * @return \Illuminate\Http\Response
     */
    public function destroy(igm_lanka_do $igm_lanka_do)
    {
        //
    }
}
