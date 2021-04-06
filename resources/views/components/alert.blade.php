<div>
    @if(session()->has('success'))
        <div class="text-center alert alert-success">
            {{session()->get('success')}}
        </div>
    @elseif($errors->any())
        <div class="text-center alert alert-danger">
            @foreach($errors->all() as $error)
                {{$error}}
        </div>
            @endforeach
    @endif
</div>
