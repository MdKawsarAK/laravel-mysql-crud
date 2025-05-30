@extends('layouts.main')
@section('content')
    <h2>All Company List</h2>
    <a href="{{ route('companies.create') }}" class="btn btn-primary mb-2">Add New Company</a>
    <table class="table table-bordered">
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
        @foreach ($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->address}}</td>
                <td>{{$company->phone}}</td>
                <td>{{$company->created_at}}</td>
                <td>{{$company->updated_at}}</td>
                <td>
                    <a href="{{ route('companies.edit', $company) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('companies.destroy', $company) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Delete the Company?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection