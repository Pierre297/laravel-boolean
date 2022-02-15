@extends('layouts.main-layout')
@section('content')

<a class="btn btn-primary mx-6" href="{{ route('postcard.create') }}">Create New Postcard</a>

<postcards-component></postcards-component>
    
@endsection