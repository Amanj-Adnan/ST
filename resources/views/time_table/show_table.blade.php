@extends('layouts.app')

@section('content')

    <div class="container flex mt-24  justify-center mx-auto">
        <div class="flex flex-col">
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
                                        {{$student_name->name}}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500"> {{$object->date}}</div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">
                                    {{$object->Status}}
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
