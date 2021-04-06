@extends('layouts')

@section('title')
    Create Todo
@endsection

@section('content')
<div class=" text-center container">
    <h1 class="text-center my-5">Create Todo</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Name</div>
                      <div class="card-body">
                         <form action="/upload" method="post">
                             @csrf
                             <div class="form-group">
                                 <input type="text" class="form-control"  name="title" />
                             </div>
                             <div class="form-group text-center">
                                <button type="submit" class="btn btn-success">Create</button>
                             </div>
                        </form>
                      </div>
                </div>
            </div>
        </div>
</div>
@endsection
