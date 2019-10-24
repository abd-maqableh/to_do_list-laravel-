@extends('layouts/main')


@section('content')
    <form class="container" method="post" action="{{route('task.update',$task->id)}}">
        @method ('PUT')
           @csrf
        <div class="form-group">
            <label for="task">Task</label>
            <input type="text"  name="task" class="form-control" aria-describedby="emailHelp" placeholder="Write your Task" value="{{$task->name}}">
        </div>

        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>

@endsection
