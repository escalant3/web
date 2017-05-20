@extends('web.layouts.base')

@section('content')
    
    <post post_id="{{ Request::route('id') }}"></post>

@endsection