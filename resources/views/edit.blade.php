@extends('layout.header')

@section('content')

<div class="container w-50">
    <div class="row">
        <div class="col">
            <form action="{{route('todolists.update', $todolist->id)}}" method="POST" autocomplete="off" class="mt-5">
                @csrf
                @method('PUT')
                <div class="input-group">
                    <input type="text" name="content" value=" {{$todolist->content}}"class="form-control" placeholder="Edit your task">
                    <button type="submit" class="btn btn-dark btn-sm px-4">
                        save
                    </button>
                </div>
            </form>
            <p class="mt-3 text-center">Edit your task <i class="fa-solid fa-pen"></i></p>
        </div>
    </div>
</div>

@endsection



