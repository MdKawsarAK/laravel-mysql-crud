@extends('layouts.main')
|@section('content')
    <h2>{{ $mode === 'edit' ? 'Update' : 'Create' }} Service</h2>
    <form action="{{ $mode === 'edit' ? route('services.update', $service) : route('services.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @if ($mode === 'edit')
            @method('PUT')
        @endif
        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name', $service->name ?? '') }}" id=""
                class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="price">Price</label>
            <input type="number" name="price" value="{{ old('price', $service->price ?? '') }}" id=""
                class="form-control" required>
        </div>
        <div class="mb-2">
            <label for="description">Description</label>
            <input type="text" name="description" value="{{ old('description', $service->description ?? '') }}"
                id="" class="form-control" required>
        </div>
        <button class="btn btn-success">{{ $mode === 'edit' ? 'Update' : 'Create' }}</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
