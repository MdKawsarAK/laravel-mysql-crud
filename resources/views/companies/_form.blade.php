@extends('layouts.main')
@section('content')
    <h2>{{$mode === 'edit' ? 'Update' : 'Create'}} Company</h2>
    <form action="{{ $mode === 'edit' ? route('companies.update', $company) : route('companies.store') }}" method="POST">
        @csrf
        @if ($mode === 'edit')
            @method('PUT')
        @endif
        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name', $company->name ?? '') }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="address">Address</label>
            <input type="text" name="address" value="{{ old('address', $company->address ?? '') }}" class="form-control"
                required>
        </div>
        <div class="mb-2">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $company->phone ?? '') }}" class="form-control" required>
        </div>
        <button class="btn btn-success">{{$mode === 'edit' ? 'Update' : 'Create'}}</button>
        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection