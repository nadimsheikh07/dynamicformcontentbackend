<?php

namespace App\Http\Controllers;

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
        // return view('form/form1', ['name' => 'Nadim']);
        $data = [
            'name' => 'Nadim'
        ];
        $pdf = LaravelPdf::loadView('form/form1', $data);
        return $pdf->stream('document.pdf');
    }
}
