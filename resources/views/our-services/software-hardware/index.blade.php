@extends('layouts.app')

@section('title', 'Software & Hardware - Redirect')

@section('content')
    <div class="alert alert-info">
        <h3>This page has moved.</h3>
        <p>Please <a href="{{ url('/services/software-hardware') }}">click here</a> to go to the new page.</p>
    </div>
@endsection
