@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="jumbotron">
        <h1>Hello, {{ $user->email }}!</h1>
        <p>You are now logged in.</p>
    </div>
</div>
@stop
