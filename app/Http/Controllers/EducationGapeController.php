<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use niklasravnsborg\LaravelPdf\Facades\Pdf as LaravelPdf;

class EducationGapController extends Controller
{
    public function index()
    {
        return view('form/educationGap');
    }

    public function print(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'fathername' => 'required',
            'address' => 'required',
            'class' => 'required',
            'classYear' => 'required',
            'school' => 'required',
            'fromYear' => 'required',
            'toYear' => 'required',
            'detail' => 'required',
            'newSchool' => 'required',
            'newSchoolYear' => 'required',
        ]);
        if ($validator->fails()) {
            return Redirect::to('/education_Gap_form')->withErrors($validator)->withInput();
        } else {
            $input = $request->all();
            $pdf = LaravelPdf::loadView('pdf/educationGap', $input);
            return $pdf->stream('educationGap.pdf');
        }
    }
}
