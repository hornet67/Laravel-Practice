@extends('layouts.layout')
@section('main-content')

    @include('main-content.addStudent')

    

    <table>
        <caption>Student table</caption>
        <thead>
            <th>Sl</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </thead>
        <tbody>
            {{-- dd() --}}
            @foreach ($student as $index => $item)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td><a href="/students/edit?id={{$item->id}}"><button id="edit">Edit</button></a></td>
                    <td><a href="/students/delete?id={{$item->id}}"><button id="delete">Delete</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{-- @include('main-content.editStudent') --}}


    {{-- <script>
        
    </script> --}}
@endsection