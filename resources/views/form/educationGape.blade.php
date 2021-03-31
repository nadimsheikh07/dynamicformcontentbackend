@extends('layouts.default')
@section('content')

<form action="/print_education_gape" method="post" novalidate>
    @csrf

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control hindiFont {{ $errors->first('name') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('name') }}
                </div>
            </div>
            <div class="form-group">
                <label>From Year</label>
                <input type="text" name="fromYear" value="{{ old('fromYear') }}" class="form-control hindiFont {{ $errors->first('fromYear') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('fromYear') }}
                </div>
            </div>
            <div class="form-group">
                <label>To Year</label>
                <input type="text" name="toYear" value="{{ old('toYear') }}" class="form-control hindiFont {{ $errors->first('toYear') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('toYear') }}
                </div>
            </div>
            <div class="form-group">
                <label>Father Name</label>
                <input type="text" name="fathername" value="{{ old('fathername') }}" class="form-control hindiFont {{ $errors->first('fathername') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('fathername') }}
                </div>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea type="textarea" name="address" value="{{ old('address') }}" class="form-control hindiFont {{ $errors->first('address') ? 'is-invalid' : '' }}"></textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('address') }}
                </div>
            </div>
            <div class="form-group">
                <label>Detail</label>
                <textarea type="textarea" name="detail" value="{{ old('detail') }}" class="form-control hindiFont {{ $errors->first('detail') ? 'is-invalid' : '' }}"></textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('detail') }}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Class</label>
                <input type="text" name="class" value="{{ old('class') }}" class="form-control hindiFont {{ $errors->first('class') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('class') }}
                </div>
            </div>
            <div class="form-group">
                <label>Class Year</label>
                <input type="text" name="classYear" value="{{ old('classYear') }}" class="form-control hindiFont {{ $errors->first('classYear') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('classYear') }}
                </div>
            </div>
            <div class="form-group">
                <label>School / College / Course</label>
                <input type="text" name="school" value="{{ old('school') }}" class="form-control hindiFont {{ $errors->first('school') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('school') }}
                </div>
            </div>
            <div class="form-group">
                <label>New School / College / Course</label>
                <input type="text" name="newSchool" value="{{ old('newSchool') }}" class="form-control hindiFont {{ $errors->first('newSchool') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('newSchool') }}
                </div>
            </div>
            <div class="form-group">
                <label>New School / College / Course Year</label>
                <input type="text" name="newSchoolYear" value="{{ old('newSchoolYear') }}" class="form-control hindiFont {{ $errors->first('newSchoolYear') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    {{ $errors->first('newSchoolYear') }}
                </div>
            </div>
        </div>
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop