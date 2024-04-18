@extends('layout')

@section('title')
All Users
@endsection

@section('content')
<a href="{{route('client.create')}}" class="btn btn-success fs-5 p-2 m-4"> Add new user</a>
<table class="table table-danger table-striped table-bordered border-primary">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Name</th>
            <th scope="col">Surename</th>
            <th scope="col">E-mail</th>
            <th scope="col">Address</th>
            <th scope="col">phone</th>
            <th scope="col">View</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $use)
            <tr>
                <th scope="row">{{ $use->id }}</th>
                <td>{{ $use->name }}</td>
                <td>{{ $use->surename }}</td>
                <td>{{ $use->email }}</td>
                <td>{{ $use->Address }}</td>
                <td>{{ $use->phone }}</td>
                <td><a href="{{route('client.show',$use->id)}}" class="btn btn-info">view</a></td>
                <td><a href="" class="btn btn-primary">Update</a></td>
                <td><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
    {{-- getting data by where in any operation is its depth --}}
</table>    

@endsection