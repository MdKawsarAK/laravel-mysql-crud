@extends('layouts.main')
@section('content')
    <h2>List Of Services</h2>
    <a href="{{ route('services.create') }}" class="btn btn-primary mb-2">Add new service</a>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        @foreach ($services as $service)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $service->name }}</td>
                <td>${{ $service->price }}</td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->created_at }}</td>
                <td>{{ $service->updated_at }}</td>
                <td>
                    <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this service?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
