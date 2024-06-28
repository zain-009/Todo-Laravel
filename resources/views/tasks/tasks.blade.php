@extends('layout.layout')

@section('content')
<h1>Tasks</h1>

@foreach ($tasks as $task)
<div class="card mt-3 @if ($task->isCompleted()) border-success @endif">
    <div class="card-body">
        @if ($task->isCompleted())
        <span class="badge bg-success">Completed</span>
        @endif
        <p>{{$task->description}}</p>

        @if (!$task->isCompleted())
        <form action="/tasks/{{$task->id}}" method="POST">
            @csrf
            @method('PATCH')
            <button input='submit' class="btn btn-light container">Complete</button>
        </form>
        @else

        <form action="/tasks/{{$task->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button input='submit' class="btn btn-danger container">Delete</button>
        </form>
        @endif
    </div>
</div>
@endforeach
<a href="/create" class="mt-3 btn btn-secondary btn-lg container">New Task</a>
@endsection