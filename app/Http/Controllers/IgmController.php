<?php

namespace App\Http\Controllers;

use App\Models\igm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IgmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(igm::all());
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
            'igm_india_voyage_id' => 'integer',
            'date_of_departure' => 'date|date_format:Y-m-d',
            'date_of_arrival' => 'date|date_format:Y-m-d',
            'time_of_arrival' => 'date_format:H:i:s',
            'total_number_of_bols' => 'integer',
            'total_number_of_packages' => 'integer',
            'total_number_of_containers' => 'integer',
            'total_gross_mass' =>  'numeric|regex:/^\d*(\.\d{1,2})?$/',
            'consolidated_cargo' => 'integer',
            'number_of_packages' => 'integer',
            'gross_mass' =>  'numeric|regex:/^\d*(\.\d{1,2})?$/',
            'volume_in_cubic_meters' =>  'numeric|regex:/^\d*(\.\d{1,2})?$/',
            'num_of_ctn_for_this_bol' => 'integer',
            'mode_of_transport_code' => 'integer',
            'line_number' => 'integer',
            'bol_nature' => 'integer',
            'client_id_carrier' => 'integer',
            'client_id_notify' => 'integer',
            'client_id_cosignee' => 'integer',
            'freight_value' => 'integer',
            'deleted' => 'integer',
        );

        $validator = validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        try {
            igm::create($request->all());
            return response()->json(["success" => "Saved Successfully"]);
        } catch (\Throwable $th) {
            return response()->json(["error" => "Something wrong"],401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\igm  $igm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(igm::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\igm  $igm
     * @return \Illuminate\Http\Response
     */
    public function edit(igm $igm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\igm  $igm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igm $igm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\igm  $igm
     * @return \Illuminate\Http\Response
     */
    public function destroy(igm $igm)
    {
        //
    }
}
