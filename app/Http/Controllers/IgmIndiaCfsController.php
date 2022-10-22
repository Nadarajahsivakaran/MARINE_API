<?php

namespace App\Http\Controllers;

use App\Models\igm_india_cfs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class IgmIndiaCfsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(igm_india_cfs::all());
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
            '*' => 'required'
        );

        $validator = validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        try {
            igm_india_cfs::create($request->all());
            return response()->json(["success" => "Saved Successfully"], 201);
        } catch (\Throwable $th) {
            return response()->json(["error" => "Something wrong"], 401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\igm_india_cfs  $igm_india_cfs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(igm_india_cfs::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\igm_india_cfs  $igm_india_cfs
     * @return \Illuminate\Http\Response
     */
    public function edit(igm_india_cfs $igm_india_cfs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\igm_india_cfs  $igm_india_cfs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, igm_india_cfs $igm_india_cfs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\igm_india_cfs  $igm_india_cfs
     * @return \Illuminate\Http\Response
     */
    public function destroy(igm_india_cfs $igm_india_cfs)
    {
        //
    }
}
