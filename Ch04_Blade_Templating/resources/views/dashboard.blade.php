@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p>Welcome to the dashboard!</p>
@endsection

@section('footerScripts')
    @parent
    <script src="dashboard.js"></script>
@endsection
