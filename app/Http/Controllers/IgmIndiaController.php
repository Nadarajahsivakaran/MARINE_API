<?php

namespace App\Http\Controllers;

use App\Models\igm_india;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IgmIndiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(igm_india::all());
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
            'date1' => 'date|date_format:Y-m-d',
            'time1' => 'date_format:H:i:s',
            'igm_india_voyage_id' => 'integer',
            'line_code' => 'integer',
            'vessel_type1' => 'min:1|max:1',
            'poa' => 'integer',
            'date_time' => 'date_format:Y-m-d H:i:s',
            'igm_india_terminal_id' => 'integer',
            'same_bottom' => 'min:1|max:1',
            'passenger_list' => 'min:1|max:1',
            'ship_stores' => 'min:1|max:1',
            'crew_effect' => 'min:1|max:1',
            'crew_list' => 'min:1|max:1',
            'maritime' => 'min:1|max:1',
            'deleted' => 'integer',
        );

        $validator = validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            igm_india::create($request->all());
            return response()->json(["success" => "Saved Successfully"]);
        } catch (\Throwable $th) {
            return response()->json(["error" => "Something wrong"],401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\igm_india  $igm_india
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(igm_india::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\igm_india  $igm_india
     * @return \Illuminate\Http\Response
     */
    public function edit(igm_india $igm_india)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\igm_india  $igm_india
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igm_india $igm_india)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\igm_india  $igm_india
     * @return \Illuminate\Http\Response
     */
    public function destroy(igm_india $igm_india)
    {
        //
    }
}
