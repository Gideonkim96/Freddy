@extends('layouts.app')

@section('title', 'Web & Cloud Solutions - Redirect')

@section('content')
    @verbatim
<div class="alert alert-info">
        <h3>This page has moved.</h3>
        <p>Please <a href="{{ url('/services/web-cloud-solutions') }}">click here</a> to go to the new page.</p>
    </div>
@endverbatim
@endsection
