@extends('layouts.main')
@section('content')
    <h2>{{$mode === "edit" ? 'Update' : 'Create'}} Supplier</h2>
    <form action="{{ $mode === 'edit' ? route('suppliers.update', $supplier) : route('suppliers.store') }}"
        enctype="multipart/form-data" method="POST" autocomplete="on">
        @csrf
        @if ($mode === 'edit')
            @method('PUT')
        @endif
        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name', $supplier->name ?? '') }}" class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email', $supplier->email ?? '') }}" class="form-control"
                required>
        </div>
        <div class="mb-2">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $supplier->phone ?? '') }}" class="form-control"
                required>
        </div>
        <div class="mb-2">
            <label for="image">Image</label>
            <input type="file" name="photo" class="form-control">
            @if (isset($supplier) && $supplier->photo)
                <img src="{{ asset('storage/' . $supplier->photo) }}" width='100' alt="image" class="mt-2">
            @endif
        </div>
        <button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : "Create" }}</button>
        <a class="btn btn-secondary" href="{{ route('suppliers.index') }}">Back</a>
    </form>
@endsection