@extends('layouts.app')

@section('content')

    <div class="flex justify-between m-6">

        <div class="m-3">
            <p> Student Profile</p>


            <div>{{$student->name}}</div>



            <div>
                <a  href="{{route('form'  , [$supervisor , $student])}}" class="text-blue-900 font-bold"> Send Request </a>
            </div>
        </div>

        <div class="m-3">
            @if($names != null )

                @foreach ($names as $name)

                    <div class="text-2xl font-bold m-3 ">
                        applied to  <span class="text-blue-900"> {{ $name }}</span>
                    </div>


                @endforeach

            @endif
        </div>
    </div>


@endsection
