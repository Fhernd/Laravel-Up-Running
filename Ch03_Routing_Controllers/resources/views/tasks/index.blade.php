@extends('layout')

@section('content')
    <h1>Tasks</h1>
    <a href="{{ route('task.create') }}">Create Task</a>
    @if ($message = Session::get('success'))
        <div>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <ul>
        @foreach ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
                <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
