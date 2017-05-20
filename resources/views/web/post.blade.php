@extends('web.layouts.base')

@section('content')
    
    <post slug="{{ Request::route('id') }}"></post>

@endsection