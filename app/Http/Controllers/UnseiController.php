<?php

namespace App\Http\Controllers;

use App\Models\Unsei;
use Illuminate\Http\Request;

class UnseiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $word = $request['word'];
        $random = rand(1, 7);
        $unseiList=Unsei::where('id', $random)->get();

        return view('result', compact('unseiList', 'word'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Unsei $unsei)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unsei $unsei)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unsei $unsei)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unsei $unsei)
    {
        //
    }
}
