<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        return view('form/kirayaForm');
    }

    public function print(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->validation($validator->errors(), __('response.errors.validation'));
        }
        $input = $request->all();

        $data = [
            'name' => $input['name'],
            'fathername' => $input['fathername'],
        ];
        $pdf = LaravelPdf::loadView('pdf/kirayaForm', $data);
        return $pdf->stream('document.pdf');
    }
}
