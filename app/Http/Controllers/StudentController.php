<?php

namespace App\Http\Controllers;

use App\Models\AcceptForm;
use App\Models\Job_place;
use App\Models\RequestForm;
use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
       return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $user = $request->user();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'university' => ['required', 'string', 'max:255'],
            'college' => ['required', 'string', 'max:255'],
            'department' => ['required', 'string', 'max:255'],

        ]);


        $student = Student::create([
            'supervisor_id' => $request->user()->profile_id,
            'name' => $request->name,
            'university' => $request->university,
            'college' => $request->college,
            'department' => $request->department,
        ]);


           return redirect(route('show_supervisor' , $user));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Supervisor $supervisor ,Student $student)
    {
        $names = null ;
        $requsts= RequestForm::with('student')->where('student_id', $student->id)->get();
        $subsets = $requsts->map(function ($requests) {
            return collect($requests->toArray())
                ->only(['job_place_id'])
                ->all();
        });





        for ($i = 0; $i < count($subsets); $i++) {

            $place_id = $subsets[$i]['job_place_id'];
            $places = Job_place::find($place_id);
            $names[] = $places->user->name;

        }



        $accept_form=AcceptForm::with('student')->where('student_id', $student->id)->first();
        $accepted_place = null;
       if($accept_form != null){
           $accepted_place = Job_place::find($accept_form->job_place_id);
       }



        return view('students.show', [
            'student' => $student,
            'supervisor' => $supervisor,
            'names' => $names,
            'accepted_place'=>$accepted_place,
            'accept_form'=>$accept_form
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
