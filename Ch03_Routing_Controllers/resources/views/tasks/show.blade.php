@extends('layout')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <a href="{{ route('tasks.index') }}">Back</a>
@endsection
