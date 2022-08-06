@extends('layout.header')

@section('content')
    <div class="container">
        <div class="bg-light p-5 rounded">
            <div class="col-sm-8 mx-auto">
                <h1>ToDo list app example</h1>
                <p>A To-Do List to Organize Your Work & Life</p>
                <ul>
                    <li>CRUD</li>
                    <li>Validation: Max 20 characters</li>
                    <li>CSRF Token</li>
                </ul>
                    <a class="btn btn-primary" href="{{route('todolists.index')}}" role="button">Add a task »</a>
                </p>
            </div>
        </div>
    </div>
@endsection
