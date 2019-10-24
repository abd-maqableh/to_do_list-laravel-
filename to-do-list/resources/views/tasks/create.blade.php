@extends('layouts/main')


@section('content')
<form class="container" method="post" action="{{route('task.store')}}">
    @csrf
    <div class="form-group">
        <label for="task">Task</label>
        <input type="text"  name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write your Task">
    </div>

    <button type="submit" class="btn btn-primary" >Submit</button>
</form>
@endsection
