@extends('layout.layout')

@section('content')

<h1 class="mt-5">New Task</h1>

@if ($errors->any())

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif

<form action="/tasks" method="post">
    @csrf
    <div class="form-group">
        <label for="description">Task Description</label>
        <input class="form-control  mt-3" type="text" name="description">
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-secondary container">Submit</button>
    </div>
</form>
@endsection