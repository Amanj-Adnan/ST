<?php

namespace App\Http\Controllers;

use App\Models\AcceptForm;
use Illuminate\Http\Request;

class AcceptFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('accept_form.create');
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
     * @param  \App\Models\AcceptForm  $acceptForm
     * @return \Illuminate\Http\Response
     */
    public function show(AcceptForm $acceptForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcceptForm  $acceptForm
     * @return \Illuminate\Http\Response
     */
    public function edit(AcceptForm $acceptForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcceptForm  $acceptForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcceptForm $acceptForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcceptForm  $acceptForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcceptForm $acceptForm)
    {
        //
    }
}
