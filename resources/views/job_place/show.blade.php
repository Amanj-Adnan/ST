@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">

    <div class="flex flex-col  items-center">
            <div class="text-2xl font-bold m-2">LIST OF REQUESTS</div>

            @if($ruquests != null)

                @foreach($ruquests as  $request  )

                    <div class="text-center flex flex-col p-2 justify-between  bg-gray-300 w-11/12 rounded-md m-2">
                        <div class="text-xl font-semibold">
                            <div class="text-gray-900 overflow-ellipsis">{{$request}} has applied for {{$place->user->name}} as internship</div>
                        </div>

                        <div class="mt-3 flex  justify-center">

                                <span class="inline-block rounded-md text-lg font-semibold py-2 mx-1 px-4 text-white bg-green-700">
                                     <a href="{{route('accept.create', [$place , $student_forms[$loop->index] , $request ])}}">Accept</a>
                                </span>


                            <form method="post" action="{{ route("form.delete" , [$student_forms[$loop->index] , $place] )  }}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="inline-block rounded-md mx-1 text-lg font-semibold py-2 px-4 text-white bg-red-700">
                                   Cancel
                                </button>

                            </form>

                        </div>
                    </div>


                @endforeach

            @else
                <div class="text-center flex flex-col p-4 md:text-left md:flex-row md:items-center md:justify-between md:p-8 bg-gray-300 rounded-md">
                    <div class="text-xl font-semibold">
                        <div class="text-gray-900">You have not any requests at this moment.</div>
                    </div>
                </div>
            @endif
        </div>


        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-28 bg-clip-padding bg-opacity-60 border border-gray-200" style="backdrop-filter: blur(20px);">
                <div class="max-w-md mx-auto">
                    <h1 class="font-bold text-green-700 lg:text-2xl ">
                        JobPlace Profile
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
                                    <h5>Place Name: {{$place->user->name}}</h5>
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

                                            @foreach ($accept_form as $object)

                                                <tr>
                                                    <td class="p-2 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="font-medium text-blue-800">

                                                                <a href="{{route('time_table.edit' , [$place->user->name , $object , $object->student->name])}}">
                                                                    {{ $object->student->name }} </a>
                                                            </div>
                                                        </div>
                                                    </td>





                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


@endsection
