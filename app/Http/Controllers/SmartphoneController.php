<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('smartphone.index', [
            'title' => 'Smartphone',
            'smartphones' => Smartphone::all(),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('smartphone.create', ['title' => 'Create Smartphone']);
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
    public function show(Smartphone $smartphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Smartphone $smartphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Smartphone $smartphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Smartphone $smartphone)
    {
        //
    }
}
