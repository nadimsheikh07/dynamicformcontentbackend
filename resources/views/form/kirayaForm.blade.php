@extends('layouts.default')
@section('content')

<form action="{{url('print_kiraya')}}" method="post">
    @csrf
    
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control hindiFont">
    </div>

    <div class="form-group">
        <label>Father Name</label>
        <input type="text" name="fathername" class="form-control hindiFont">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop