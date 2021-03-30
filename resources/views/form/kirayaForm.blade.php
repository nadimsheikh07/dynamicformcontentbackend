@extends('layouts.default')
@section('content')

<form action="/print_kiraya" method="post" novalidate>
    @csrf

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control hindiFont {{ $errors->first('name') ? 'is-invalid' : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
    </div>

    <div class="form-group">
        <label>Father Name</label>
        <input type="text" name="fathername" value="{{ old('fathername') }}" class="form-control hindiFont {{ $errors->first('fathername') ? 'is-invalid' : '' }}">
        <div class="invalid-feedback">
            {{ $errors->first('fathername') }}
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop