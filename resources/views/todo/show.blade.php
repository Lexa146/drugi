@extends('layouts')

@section('title')
    {{ $todo->title }}
@endsection

@section('content')

<div class=" text-center container">
    <h1 class="text-center my-5">
        {{ $todo->title }}
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    Status
                </div>

                @if($todo->completed)
                    <div class="card-body">
                         COMPLETED
                     </div>
                @else
                    <div class="card-body">
                        NOT COMPLETED
                    </div>
                @endif
            </div>
            <div class="my-2">
                <a href="{{asset('/' . $todo->id. '/edit')}}" class="btn btn-primary my-2">Edit</a>
                <a href="{{asset('/' . $todo->id. '/delete')}}" class="btn btn-danger  my-2">Delete</a>
            </div>
        </div>
    </div>
</div>

@endsection
