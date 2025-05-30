@extends('layouts.main')

@section('content')
    <div class="text-center mt-5">
        <h1 class="display-4">Welcome to MyCompany</h1>
        <p class="lead mt-3">Your trusted partner in web development and design.</p>

        <a href="{{ url('/products') }}" class="btn btn-primary mt-4">Get Started</a>
    </div>
@endsection