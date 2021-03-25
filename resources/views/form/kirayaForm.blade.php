@extends('layouts.default')
@section('content')
<form action="{{url('print_kiraya')}}" method="post">
    @csrf
    <input type="text" name="name" />
    <h1 class="hindiFont">Here is hindiFont </h1>
    <input type="submit">
</form>

@stop