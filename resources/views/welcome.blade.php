@extends('layout')

@section('content')
  <h1> My first website </h1>

  <ul>
    @foreach($tasks as $task)
      <li>{{ $task }}</li>
    @endforeach
  </ul>
@endsection

@section('title', 'Welcome')
