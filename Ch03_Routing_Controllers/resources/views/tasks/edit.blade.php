@extends('layout')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection
