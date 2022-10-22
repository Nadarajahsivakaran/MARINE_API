<?php

namespace App\Http\Controllers;

use App\Models\igm_lanka_do_containers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IgmLankaDoContainersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(igm_lanka_do_containers::all());
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
            'equipment_id' => 'integer',
            'weight' =>  'numeric|regex:/^\d*(\.\d{1,2})?$/'

        );

        $validator = validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            igm_lanka_do_containers::create($request->all());
            return response()->json(["success" => "Saved Successfully"], 201);
        } catch (\Throwable $th) {
            return response()->json(["error" => "Something wrong"], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\igm_lanka_do_containers  $igm_lanka_do_containers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(igm_lanka_do_containers::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\igm_lanka_do_containers  $igm_lanka_do_containers
     * @return \Illuminate\Http\Response
     */
    public function edit(igm_lanka_do_containers $igm_lanka_do_containers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\igm_lanka_do_containers  $igm_lanka_do_containers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igm_lanka_do_containers $igm_lanka_do_containers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\igm_lanka_do_containers  $igm_lanka_do_containers
     * @return \Illuminate\Http\Response
     */
    public function destroy(igm_lanka_do_containers $igm_lanka_do_containers)
    {
        //
    }
}
