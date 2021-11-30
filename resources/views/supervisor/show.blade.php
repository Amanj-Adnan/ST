@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-28 bg-clip-padding bg-opacity-60 border border-gray-200" style="backdrop-filter: blur(20px);">
                <div class="max-w-md mx-auto">
                    <h1 class="font-bold text-green-700 lg:text-2xl ">
                        Supervisor Profile
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
                                    <p class="ml-2">
                                    <h5>Supervisor Name: {{$supervisor->user->name}}</h5>
                                    </p>
                                </li>
                                <li class="flex items-start">

                <li class="flex items-start">
                <span class="h-6 flex items-center sm:h-7">
                  <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                </span>
                                    <p class=" text-green-700 ml-2">
                                        list of students
                                    </p>
                                </li>
                                </ul>

                            <div class="flex flex-col justify-center h-full">
                                <!-- Table -->

                                    <div class="p-1">
                                        <div class="overflow-x-auto">
                                            <table class="table-auto w-full">
                                                <thead class="text-xs font-semibold uppercase text-gray-700 bg-gray-200">
                                                <tr>
                                                    <th class="p-2 whitespace-nowrap">
                                                        <div class="font-semibold text-left">Name</div>
                                                    </th>

                                                </tr>
                                                </thead>
                                                <tbody class="text-sm divide-y divide-gray-100">

                                                    @foreach ($supervisor->student->all() as $student)

                                                    <tr>
                                                        <td class="p-2 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="font-medium text-blue-800">

                                                                    <a href="{{route( 'student.show' , [$supervisor , $student])}}"> {{ $student->name }}</a>
                                                                </div>
                                                            </div>
                                                        </td>



                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                            </div>

                        <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">

                           <button class="p-1 pl-4 pr-3 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">    <a href="{{route('create_student' , $supervisor)}}">create student </a>
                            </button>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
