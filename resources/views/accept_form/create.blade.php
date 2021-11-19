@extends('layouts.app')

@section('content')

    <!-- component -->
    <div class="antialiased sans-serif min-h-screen bg-white" style="min-height: 900px">


        <div class="border-t-8 border-gray-700 h-2"></div>
        <div class="container mx-auto py-6 px-4">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold mb-6 pb-2 tracking-wider uppercase">Accept Form</h2>
                <div>
                    <div class="relative mr-4 inline-block">
                        <div class="text-gray-500 cursor-pointer w-10 h-10 rounded-full bg-gray-100 hover:bg-gray-300 inline-flex items-center justify-center" >
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                <rect x="7" y="13" width="10" height="8" rx="2" />
                            </svg>
                        </div>

                    </div>


                </div>
            </div>

            <div class="px-6 mt-1 text-lg">
                <span class="font-bold">From :</span> {{$place->user->name}}
            </div>

            <div class="px-6 mt-1 text-lg">
                <span class="font-bold">Address :</span> {{$place->place}}
            </div>



            <div class="px-6 mt-16 text-lg">
                <span class="font-bold">Dear,</span> {{$student}}
                <div class="mt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>

                <hr class="mt-6">

                <div class="mt-6">
                    <span class="font-bold mx-2">Today:</span>
                    <span class="mx-2">
                        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-48 py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500 js-datepicker" name="start_date" type="date" id="datepicker1" value="today" >

                    </span>
                </div>

                <div class="mt-12">
                    <span class="font-bold mx-2"> Student signature:</span>
                    <span class="font-bold ml-12"> JobPlace signature:</span>
                </div>

                <div class="flex justify-center mt-16">
                    <form method="POST" action="{{ route('accept.store' ,[$place->id , $request_form_id]) }}">
                        @csrf
                        <button type="submit" class="inline-block rounded-md mx-1 text-lg font-semibold py-2 px-4 text-white bg-green-700">
                            Submit
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>


@endsection
