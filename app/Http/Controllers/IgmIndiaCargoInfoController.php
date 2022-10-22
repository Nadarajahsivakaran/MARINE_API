<?php

namespace App\Http\Controllers;

use App\Models\igm_india_cargo_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IgmIndiaCargoInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(igm_india_cargo_info::all());
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
            'igm_id' => 'integer',
            'igm_india_voyage_id' => 'integer',
            'line_number' => 'integer',
            'bill_of_landing_id' => 'integer',
            'total_packages' => 'integer',
            'total_gross' =>  'numeric|regex:/^\d*(\.\d{1,2})?$/',
            'rail_number' => 'integer',
            'client_id_consignee' => 'integer',
            'client_id_notify' => 'integer',
            'unit_count' => 'integer',
        );

        $validator = validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            igm_india_cargo_info::create($request->all());
            return response()->json(["success" => "Saved Successfully"]);
        } catch (\Throwable $th) {
            return response()->json(["error" => "Something wrong"], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\igm_india_cargo_info  $igm_india_cargo_info
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(igm_india_cargo_info::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\igm_india_cargo_info  $igm_india_cargo_info
     * @return \Illuminate\Http\Response
     */
    public function edit(igm_india_cargo_info $igm_india_cargo_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\igm_india_cargo_info  $igm_india_cargo_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igm_india_cargo_info $igm_india_cargo_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\igm_india_cargo_info  $igm_india_cargo_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(igm_india_cargo_info $igm_india_cargo_info)
    {
        //
    }
}
