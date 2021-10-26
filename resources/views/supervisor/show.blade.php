@extends('layouts.app')

@section('content')

    <p>Supervisor Pofile</p>


    <p>{{$supervisor->user->name}}</p>

    <p>{{$supervisor->user->email}}</p>

    <p>list of students</p>


    <p> create  a  student</p>

    <a href="{{route('create_student')}}">create student </a>


@endsection
