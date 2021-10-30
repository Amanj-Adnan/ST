<?php

namespace App\Http\Controllers;

use App\Models\supervisor;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class supervisor_controller extends Controller
{

     public function create()  {

      return view('supervisor.register');

    }


    public function show(Supervisor  $supervisor){

//         dd($supervisor->student->all());

        return view('supervisor.show', [
            'supervisor' => $supervisor,
        ]);

    }



    public function store(Request  $request )  {




            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'university' => ['required', 'string', 'max:255'],
                'college' => ['required', 'string', 'max:255'],
                'department' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed'],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $supervisor =  Supervisor::create([
                'university' => $request->university,
                'college' => $request->college,
                'department' => $request->department,
            ]);

            $supervisor->user()->save($user);



            event(new Registered($user));

            Auth::login($user);

            return redirect(route('show_supervisor' , $supervisor));




    }


}
