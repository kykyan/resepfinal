@extends('admin.master')

@section('content')

<table class="table" id="myTable">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $users)
            <tr>
            <td>{{ $users->id }}</th>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->role }}</td>
            <td><a href="{{ route('admin.deleteuser', $users) }}" class="badge badge-danger">Delete</a></td>
            </tr> 
        @endforeach
    </tbody>
</table>

@endsection