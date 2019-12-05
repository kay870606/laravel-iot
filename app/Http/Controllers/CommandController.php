<?php

namespace App\Http\Controllers;

use App\Command;
use App\Http\Requests\CommandRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $commands = Command::orderBy('id')->get();
        return view('commands.index', compact('commands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(CommandRequest $request)
    {
        $validated = $request->validated();
        Command::create($validated);
        return redirect('/commands')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Command $command
     * @return Response
     */
    public function show(Command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Command $command
     * @return Response
     */
    public function update(Request $request, Command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Command $command
     * @return Response
     * @throws \Exception
     */
    public function destroy(Command $command)
    {
        $command->delete();
        return redirect('/commands');
    }
}
