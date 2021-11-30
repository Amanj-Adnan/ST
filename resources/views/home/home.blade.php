@extends('layouts.app')

@section('content')

    <div class="w-full ">
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center ">
                <h1 class="font-bold    lg:text-5xl font-heading ">
                    Welcome to Summer Training
                </h1>

            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2">
                <div class="w-full   rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">

                    <div class="h-screen">
                        <div class="w-80 mt-24 m-auto lg:mt-16 max-w-sm">
                            <img src="https://www.marketing91.com/wp-content/uploads/2019/10/Role-of-Supervisor.jpg" alt=""class="rounded-t-3xl shadow-2xl lg:w-full 2xl:w-full 2xl:h-44 object-cover"/>
                            <div class="bg-white shadow-2xl rounded-b-3xl">
                                <h2 class="text-center text-gray-800 text-2xl font-bold pt-6">Supervisor</h2>
                                <div class="w-5/6 m-auto">
                                    <p class="text-center text-gray-500 pt-5">Supervisor of student can create student to do summer training</p>

                                </div>
                                <div class="bg-blue-700 w-72 lg:w-5/6 m-auto mt-8 p-2 hover:bg-indigo-500 rounded-2xl  text-white text-center shadow-xl shadow-bg-blue-700">
                                    <button classs="lg:text-sm text-lg font-bold"><a href="{{route('create_supervisor')}}">Create Supervisor </a></button>
                                </div>
                                <div class="text-center m-auto mt-2 w-full h-16">
                                    <button class="text-gray-500 font-bold lg:text-sm hover:text-gray-900"> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full   rounded-lg sahdow-lg p-12 flex flex-col justify-center items-center">
                    <div class="h-screen">
                        <div class="w-80 mt-24 m-auto lg:mt-16 max-w-sm">
                            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/9b14ba82749413.5d26f31a395ba.jpg" alt=""class="rounded-t-2xl shadow-2xl lg:w-full 2xl:w-full 2xl:h-44 object-cover"/>
                            <div class="bg-white shadow-2xl rounded-b-3xl">
                                <h2 class="text-center text-gray-800 text-2xl font-bold pt-8">Job_Place</h2>
                                <div class="w-5/6 m-auto">
                                    <p class="text-center text-gray-500 pt-5">Job place can accept student or declined and student attendance</p>

                                </div>
                                <div class="bg-blue-700 w-72 lg:w-5/6 m-auto mt-8 p-2 hover:bg-indigo-500 rounded-2xl  text-white text-center shadow-xl shadow-bg-blue-700">
                                    <button classs="lg:text-sm text-lg font-bold"> <a href="{{route('create_place')}}">Create Job_Place </a></button>
                                </div>
                                <div class="text-center m-auto mt-2 w-full h-16">
                                    <button class="text-gray-500 font-bold lg:text-sm hover:text-gray-900"> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </section>
    </div>



@endsection
