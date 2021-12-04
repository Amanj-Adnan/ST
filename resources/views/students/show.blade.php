@extends('layouts.app')

@section('content')
    @if($accepted_place != null )
            <div>
                <a  href="{{route('time_table.show', [$supervisor , $student , $accept_form])}}" class="text-blue-900 text-xl font-bold"> Student accepted by <span class="text-blue-500 font-bold">{{$accepted_place->user->name}}</span> click to time table </a>
            </div>
            @endif



        <div class="">
            @if($names != null )

                @foreach ($names as $name)

                    <div class="text-2xl font-bold m-3 ">
                        applied to  <span class="text-blue-900"> {{ $name }}</span>
                    </div>


                @endforeach

            @endif
        </div>


    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-28 bg-clip-padding bg-opacity-60 border border-gray-200" style="backdrop-filter: blur(20px);">
                <div class="max-w-md mx-auto">
                    <h1 class="font-bold text-green-700 lg:text-2xl">
                        Student Profile
                    </h1>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <ul class="list-disc space-y-2">
                                <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
</svg>
                </span>
                                    <p class="ml-1">
                                    Student Name: {{$student->name}}
                                    </p>
                                </li>
                                <li class="flex items-start">
                            </ul>



                            <div class="pt-6 text-black leading-6 font-bold sm:text-lg sm:leading-7">

                                <button class="p-1 pl-4 pr-3 bg-blue-500  text-lg rounded-lg focus:border-4 border-blue-300">  <a  href="{{route('form'  , [$supervisor , $student])}}" class="text-blue-900 font-bold"> Send Request </a>

                                </button>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





@endsection
