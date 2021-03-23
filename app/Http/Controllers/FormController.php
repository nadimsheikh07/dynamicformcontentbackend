<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use niklasravnsborg\LaravelPdf\Facades\Pdf as LaravelPdf;

class FormController extends Controller
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
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(form $form)
    {
        //
    }

    public function showForm()
    {
        // return view('form/form1', ['name' => 'Nadim']);
        $data = [
            'name' => 'Nadim'
        ];
        $pdf = LaravelPdf::loadView('form/form1', $data);
        return $pdf->stream('document.pdf');
    }
}
