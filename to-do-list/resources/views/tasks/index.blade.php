@extends('layouts.main')

@section('content')

            <h1> Hello to the Tasks</h1>

            <table class="table">
                <thead>
                <tbody>

                @foreach($tasks as $task)
                <tr>
                    <td >{{$task->name}}</td>


                <td>
                <a clas="btn btn-danger" href="/task/{{$task->id}}/edit" > Edit </a>
                </td>
                <td>
                    <form method="post" action="/task/{{$task->id}}">
                    @method ('delete')
                    @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                    <td>
                        <input type="checkbox">
                    </td>
                </tr>
                @endforeach
                </thead>


                </tbody>
            </table>

    @endsection
