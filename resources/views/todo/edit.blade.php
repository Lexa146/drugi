@extends('layouts')

@section('title')
    Edit Todo
@endsection

@section('content')
<div class=" text-center container">
    <h1 class="text-center my-5">Edit Todo</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Name</div>
                      <div class="card-body">
                          <form action="/{{ $todo->id }}/update" method="POST">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="title" value="{{ $todo->title }}">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Edit</button>
                            </div>
                         </form>
                      </div>
                </div>
            </div>
        </div>
</div>
@endsection
