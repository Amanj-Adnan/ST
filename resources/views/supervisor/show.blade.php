@extends('layouts.app')

@section('content')

    <p>Supervisor Pofile</p>


    <p>{{$supervisor->user->name}}</p>

    <p>{{$supervisor->user->email}}</p>

    <p>list of students</p>


    <p> create  a  student</p>

    <a href="{{route('create_student' , $supervisor)}}">create student </a>



          @foreach ($supervisor->student->all() as $student)

            <div class="text-2xl font-bold ">
                <a href="{{route( 'student.show' , $student)}}">{{ $student->name }}</a>
            </div>


          @endforeach




@endsection
