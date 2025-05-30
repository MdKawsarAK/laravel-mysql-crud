@extends('layouts.main')
@section('content')
    <h2>List of all Suppliers</h2>
    <a href="{{ route('suppliers.create') }}" class="btn btn-primary mb-2">Add New Supplier</a>
    <table class="table table-bordered">
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach ($suppliers as $supplier)
            <tr>
                <td>{{$supplier->id}}</td>
                <td>{{$supplier->name}}</td>
                <td>
                    @if($supplier->photo)
                        <img src="{{ asset('storage/' . $supplier->photo) }}" width="50">
                    @endif
                </td>
                <td>{{$supplier->email}}</td>
                <td>{{$supplier->phone}}</td>
                <td>
                    <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-warning">Edit</a>
                    <form style="display:inline" action="POST" action="{{ route('suppliers.destroy', $supplier) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return(confirm('Delete this Supplier?'))">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection