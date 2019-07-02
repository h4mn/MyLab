<?php

namespace App\Http\Controllers;

use App\Devlogs;
use Illuminate\Http\Request;

class DevlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $saida = '<span>Redesign of <a href="http://h4mnsoft.16mb.com">h4mnsoft.16mb.com</a></span>';
        return view('devlogs/home',['output' => $saida]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Devlogs  $devlogs
     * @return \Illuminate\Http\Response
     */
    public function show(Devlogs $devlogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Devlogs  $devlogs
     * @return \Illuminate\Http\Response
     */
    public function edit(Devlogs $devlogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Devlogs  $devlogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Devlogs $devlogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Devlogs  $devlogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devlogs $devlogs)
    {
        //
    }
}
