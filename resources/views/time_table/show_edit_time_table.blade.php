@extends('layouts.app')

@section('content')

    <div class="container flex mt-24  justify-center mx-auto">

        <div class="flex flex-col">
            <p class="text-gray-800 ml-10 mb-10 font-bold text-2xl"> The {{$place_name }} Company  training  {{$student_name}} </p>
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table class="divide-y divide-gray-300 ">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-2  text-gray-700">
                                Student name
                            </th>
                            <th class="px-6 py-2 text-gray-700">
                                Date
                            </th>
                            <th class="px-6 py-2 text-gray-700">
                                Status
                            </th>
                            <th class="px-6 py-2 text-gray-700">
                                Presence
                            </th>
                            <th class="px-6 py-2 text-gray-700">
                                Absent
                            </th>

                        </tr>
                        </thead>
                        @foreach ($table as $object)
                            <tbody class="bg-white divide-y divide-gray-300">
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{$student_name}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500"> {{$object->date}}</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{$object->Status}}
                                </td>
                                <td class="px-6 py-4">
                                    <form method="POST" action="{{ route('time_table.update' , [$object->id  , "Presence"]) }}">
                                        @method('put')
                                        @csrf

                                        <button class="px-4 py-1 text-sm text-green-600 bg-green-200 rounded-full" >
                                            Presence
                                        </button>
                                    </form>

                                </td>
                                <td class="px-6 py-4">

                                    <form method="POST" action="{{ route('time_table.update', [$object->id  , "Absent"]) }}">
                                        @method('put')
                                        @csrf

                                        <button class="px-4 py-1 text-sm text-red-400 bg-red-200 rounded-full" >
                                            Absent
                                        </button>
                                    </form>

                                </td>

                            </tr>

                            </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
