@extends('web.layouts.base')

@section('content')
    
    <post slug="{{ Request::route('slug') }}"></post>

@endsection