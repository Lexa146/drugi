@extends('layouts')

@section('title')
    Todos
@endsection

@section('content')
    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Todos</div>
                    <div class="card-body">
                        <ul class="list-group">
                          @foreach($todos as $todo)
                            <li class=" list-group-item">
                                  <a href="{{asset('/' . $todo->id. '/show')}}" class="btn btn-primary btn-sm" style="float: right">View</a>
                                @if($todo->completed)
                                 <span style="text-decoration-line: line-through">{{$todo->title}}</span>
                                 <a href="{{asset('/' . $todo->id. '/completed')}}" class="btn btn-warning btn-sm" style="color: white; float: right">Done</a>
                                @else
                                 <a href="{{asset('/' . $todo->id. '/completed')}}" class="btn btn-warning btn-sm" style="color: white; float: right">Complete</a>
                                 {{$todo->title}}
                                @endif
                            </li>
                          @endforeach
                        </ul>
                    </div>

            </div>
        </div>
    </div>
@endsection
