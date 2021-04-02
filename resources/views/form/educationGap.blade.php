@extends('layouts.default')
@section('content')

<form action="/print_education_gap" method="post" novalidate>
    @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>{{ __('text.name') }}</label>
                <input type="text" name="name" id="name" onkeydown="ConvertToKritidev010('name')" value="{{ old('name') }}" class="form-control hindiFont {{ $errors->first('name') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.fromYear') }}</label>
                <input type="text" name="fromYear" id="fromYear" onkeydown="ConvertToKritidev010('fromYear')" value="{{ old('fromYear') }}" class="form-control hindiFont {{ $errors->first('fromYear') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('fromYear') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.toYear') }}</label>
                <input type="text" name="toYear" id="toYear" onkeydown="ConvertToKritidev010('toYear')" value="{{ old('toYear') }}" class="form-control hindiFont {{ $errors->first('toYear') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('toYear') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.fathername') }}</label>
                <input type="text" name="fathername" id="fathername" onkeydown="ConvertToKritidev010('fathername')" value="{{ old('fathername') }}" class="form-control hindiFont {{ $errors->first('fathername') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('fathername') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.address') }}</label>
                <textarea type="textarea" name="address" id="address" onkeydown="ConvertToKritidev010('address')" value="{{ old('address') }}" class="form-control hindiFont {{ $errors->first('address') ? 'is-invalid' : '' }}">{{ old('address') }}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('address') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.detail') }}</label>
                <textarea type="textarea" name="detail" id="detail" onkeydown="ConvertToKritidev010('detail')" value="{{ old('detail') }}" class="form-control hindiFont {{ $errors->first('detail') ? 'is-invalid' : '' }}">{{ old('detail') }}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('detail') }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>{{ __('text.class') }}</label>
                <input type="text" name="class" id="class" onkeydown="ConvertToKritidev010('class')" value="{{ old('class') }}" class="form-control hindiFont {{ $errors->first('class') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('class') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.classYear') }}</label>
                <input type="text" name="classYear" id="classYear" onkeydown="ConvertToKritidev010('classYear')" value="{{ old('classYear') }}" class="form-control hindiFont {{ $errors->first('classYear') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('classYear') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.schoolCollegeCourse') }}</label>
                <input type="text" name="school" id="school" onkeydown="ConvertToKritidev010('school')" value="{{ old('school') }}" class="form-control hindiFont {{ $errors->first('school') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('school') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.newSchoolCollegeCourse') }}</label>
                <input type="text" name="newSchool" id="newSchool" onkeydown="ConvertToKritidev010('newSchool')" value="{{ old('newSchool') }}" class="form-control hindiFont {{ $errors->first('newSchool') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('newSchool') }}
                </div>
            </div>
            <div class="form-group">
                <label>{{ __('text.newSchoolCollegeCourseYear') }}</label>
                <input type="text" name="newSchoolYear" id="newSchoolYear" onkeydown="ConvertToKritidev010('newSchoolYear')" value="{{ old('newSchoolYear') }}" class="form-control hindiFont {{ $errors->first('newSchoolYear') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('newSchoolYear') }}
                </div>
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-primary">{{ __('text.submit') }}</button>
</form>

@stop