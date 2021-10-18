<?php

namespace App\Http\Controllers;


use App\Models\Job_place;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class job_place_controller extends Controller
{
    public function create()  {

        return view('job_place.register');

    }

    public function show(Job_place  $place){

        return view('job_place.show', [
            'place' => $place,
        ]);

    }



    public function store(Request  $request)  {



        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'place' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $place =  Job_place::create([
            'type' => $request->type,
            'place' => $request->place,

        ]);

        $place->user()->save($user);



        event(new Registered($user));

        Auth::login($user);

        return redirect(route('show_place' , $place));

    }
}
