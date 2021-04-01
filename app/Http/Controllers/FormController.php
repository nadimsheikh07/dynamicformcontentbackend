<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use niklasravnsborg\LaravelPdf\Facades\Pdf as LaravelPdf;

class FormController extends Controller
{
    
    public function index()
    {
        return view('form/rentForm');
    }

    public function print(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'firstPartyName' => 'required',
            'firstPartyFname' => 'required',
            'firstPartyAddress' => 'required',
            'secondPartyName' => 'required',
            'secondPartyFname' => 'required',
            'secondPartyAddress' => 'required',
            'rentAddress' => 'required',
            'rentNumber' => 'required',
            'rentCharacter' => 'required',
            'rentDate' => 'required',
            'rentDuration' => 'required',
            'rentPayDate' => 'required',
        ]);
        if ($validator->fails()) {            
            return Redirect::to('/')->withErrors($validator)->withInput();
        }else{
            $input = $request->all();
            $pdf = LaravelPdf::loadView('pdf/rentForm', $input);
            return $pdf->stream('rentForm.pdf');
        }
    }
}
