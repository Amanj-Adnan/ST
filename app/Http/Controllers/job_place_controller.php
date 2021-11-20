<?php

namespace App\Http\Controllers;


use App\Models\AcceptForm;
use App\Models\Job_place;
use App\Models\RequestForm;
use App\Models\Student;
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

    public function show(Job_place  $job_place){

        $ruquests = null ;
        $student_forms= null ;
        $request_forms= RequestForm::with('job_place')->where('job_place_id', $job_place->id)->get();


        $subsets = $request_forms->map(function ($requests) {
            return collect($requests->toArray())
                ->only(['student_id'])
                ->all();
        });


        $forms = $request_forms->map(function ($requests) {
            return collect($requests->toArray())
                ->only(['id'])
                ->all();
        });


        for ($i = 0; $i < count($forms); $i++) {

            $form_id = $forms[$i]['id'];
            $student_forms[] = $form_id;

        }





        for ($i = 0; $i < count($subsets); $i++) {

            $student_id = $subsets[$i]['student_id'];
            $student = Student::find($student_id);
            $ruquests[] = $student->name;

        }
//        dd($student_forms);
          $accept_form_array= AcceptForm::with('job_place' , 'student')->where('job_place_id' , $job_place->id)->get()->toArray();
          $accept_form= AcceptForm::with('job_place' , 'student')->where('job_place_id' , $job_place->id)->get();

//         dd($accept_form_array[0]['student']['name']);
//          dd($accept_form[0]['student']['name']);

        return view('job_place.show', [
            'place' => $job_place,
            'ruquests' => $ruquests,
            'student_forms' =>$student_forms,
            'accept_form'=> $accept_form
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
