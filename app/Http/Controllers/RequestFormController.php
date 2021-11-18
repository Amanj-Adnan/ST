<?php

namespace App\Http\Controllers;

use App\Models\Job_place;
use App\Models\RequestForm;
use App\Models\Student;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use function React\Promise\map;

class RequestFormController extends Controller
{
    public function create(Supervisor $supervisor ,Student $student  )
    {


        $places = Job_place::all();
        return view('request_forms.create', [
            'student' => $student,
            'places'=>$places,
            'supervisor' => $supervisor
        ]);
    }


    public function store(Request $request , Supervisor $supervisor , Student $student)
    {




       $place_id= $request->Job_Place/1;


        $request->validate([

            'serial_no' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],

        ]);


         RequestForm::create([
            'student_id' => $student->id,
            'job_place_id' => $place_id,
            'serial_no' => $request->serial_no,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);


        return redirect(route('student.show' , [$supervisor , $student] ));
    }

    public function destroy($id , $place)
    {

        $requestForm = RequestForm::find($id);
        $requestForm->delete();
        return redirect(route('show_place' , $place/1));

    }

}
