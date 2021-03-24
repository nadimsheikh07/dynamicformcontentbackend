@extends('layouts.default')
@section('content')
<form action="{{url('print_kiraya')}}" method="post">
    @csrf
    <input type="text" name="name" />
    <input type="submit">
</form>

@stop