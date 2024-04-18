@extends('layout')

@section('title')
    show single user
@endsection

@section('content')
    <table class="table table-danger table-striped table-bordered border-dark">
        <tr>
            <th width="130px">id</th>
            <td>{{$client->id }}</td>
            
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$client->name }}</td>
        </tr>
        <tr>
            <th>SureName</th>
            <td>{{$client->surename }}</td>

        </tr>
        <tr>
            <th>E-mail</th>
            <td>{{$client->email }}</td>
            
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$client->Address }}</td>

        </tr>
        <tr>
            <th>Phone</th>
            <td>{{$client->phone }}</td>

        </tr>
        <tr>
            <th>Created At</th>
            <td>{{$client->created_at }}</td>

        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{$client->updated_at }}</td>
        </tr>



    </table>
<a href="{{route('client.index')}}" class="btn btn-danger">Back to main page</a>

@endsection
