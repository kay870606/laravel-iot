<?php

namespace App\Http\Controllers;

use App\Light;
use Illuminate\Http\Request;

class LightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lights.index');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Light $light
     * @return \Illuminate\Http\Response
     */
    public function show(Light $light)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\light $light
     * @return \Illuminate\Http\Response
     */
    public function edit(Light $light)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Light $light
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Light $light)
    {
        if ($light->operation === 0) {
            $light->update(['operation' => 1]);
        } else {
            $light->update(['operation' => 0]);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\light $light
     * @return \Illuminate\Http\Response
     */
    public function destroy(Light $light)
    {
        //
    }
}
