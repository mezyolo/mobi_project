@extends('templates.room_creation')

@section('content')
  {{ Form::open() }}
    {{ Form::label('name', 'Room Name') }}
    {{ Form::text('name', 'Room Name') }}
  {{ Form::close() }}
@endsection