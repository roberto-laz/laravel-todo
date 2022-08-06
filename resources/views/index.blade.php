@extends('layout.header')

@section('content')

<div class="container w-25 mt-5">
    <div class="row">
        <div class="col">
            <div class="card shadow-sm">
               <div class="card-body">

                    {{-- CREATE --}}

                    <h3 class="mb-3">Add a task</h3>
                    <form action="{{route('todolists.store')}}" method="POST" autocomplete="off">
                        @csrf
                        @method('post')
                        <div class="input-group">
                            <input type="text" name="content" class="form-control" placeholder="write something here..." value="{{old('content')}}">
                            <button type="submit" class="btn btn-dark btn-sm px-4">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            {{-- error meesage --}}
                            @error('content')
                                <p class="w-75 mx-2" >{{$message}}</p>
                            @enderror
                        </div>
                    </form>
                    {{-- if there are any tasks--}}
                    @if (count($todolists))
                        <ul class="list-group list-group-flush mt-3">
                            @foreach ($todolists as $todolist)
                                <li class="list-group-item d-flex  "> 
                                    <p class="w-75 mx-2" >{{$todolist->content}}</p>

                                     {{-- EDIT --}}

                                    <form action="{{route('todolists.edit',$todolist->id)}}" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-link btn-sm float-end">
                                            <i class="fa-solid fa-edit"></i>
                                        </button>
                                    </form>

                                    {{-- DELETE --}}

                                    <form action="{{route('todolists.destroy',$todolist->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link btn-sm float-end">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                        <p class="text-center mt-5">You have {{count($todolists)}} pending {{Str::plural('task', $todolists->count())}}</p>
                    @else
                        <p class="text-center mt-5">There are no tasks</p>
                    @endif
                        
                     

               </div>
            </div>
        </div>
    </div>
</div>

{{-- PAGINATION 10 ITEMS --}}
{{-- TODO fix styles --}}

{{-- <div class="container w-25 mt-5">
    <div class="row"> 
        <div class="col">
            <div class="dropdown-item w-25">
                {{ $todolists->links() }}
            </div>
        </div>
    </div>
</div> --}}

@endsection