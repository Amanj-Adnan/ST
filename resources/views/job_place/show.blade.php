@extends('layouts.app')

@section('content')





    <div class="flex justify-between m-5">

        <div class="text-gray-800 font-bold text-2xl">
            <p>JobPlace Profile </p>

            <p >{{$place->user->name}}</p>
        </div>


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
                                     <a href="{{route('accept.create', [$place , $student_forms[$loop->index] ])}}">Accept</a>
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

    </div>



@endsection
