@extends('layouts.app')

@section('title', 'Contact Us - Redirect')

@section('content')
    @verbatim
<div class="alert alert-info">
        <h3>This page has moved.</h3>
        <p>Please <a href="{{ url('/contact-us') }}">click here</a> to go to the new Contact Us page.</p>
    </div>
@endverbatim
@endsection
