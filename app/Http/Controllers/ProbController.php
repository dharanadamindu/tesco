<?php

namespace App\Http\Controllers;

use App\Prob;
use App\User;
use db;
use Illuminate\Http\Request;

class ProbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function nuts()
    {
        $prob = Prob::all()->whereIn("template","nuts");
        return \view('pages.category.f.nuts.index')->with('prob',$prob);
    }

    public function choco()
    {
        $prob = Prob::all()->whereIn("template","choco");
        return \view('pages.category.f.choco.index')->with('prob',$prob);
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
     * @param  \App\Prob  $prob
     * @return \Illuminate\Http\Response
     */
    public function show(Prob $prob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prob  $prob
     * @return \Illuminate\Http\Response
     */
    public function edit(Prob $prob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prob  $prob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prob $prob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prob  $prob
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prob $prob)
    {
        //
    }
}
