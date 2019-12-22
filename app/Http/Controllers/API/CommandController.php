<?php

namespace App\Http\Controllers\API;

use App\Command;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommandRequest;
use Illuminate\Http\Request;

class CommandController extends Controller
{

    public function firstAndDelete()
    {
        $command = Command::firstOrFail();
        $newCommand = $command->replicate();
        $command->delete();
        return $newCommand;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Command::orderBy('id')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommandRequest $request)
    {
        $validated = $request->validated();
        $command = Command::create($validated);
        return response($command, 200)
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
