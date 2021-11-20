<?php

namespace App\Http\Controllers;

use App\Models\Job_place;
use App\Models\Student;
use App\Models\TimeTable;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{







    public function show($supervisor , $student , $accept_form)
    {
        $table= TimeTable::with('accept')->where('accept_form_id', $accept_form)->get();

        $student_name=Student::find($student);



        return view('time_table.show_table',[
            'table' => $table,
            'student_name' => $student_name,
        ]);
    }





   public function edit($place , $accept_form , $student){


       $table= TimeTable::with('accept')->where('accept_form_id', $accept_form)->get();


        return view ('time_table.show_edit_time_table',[
            'table' => $table,
            'student_name' => $student,
            'place_name' =>$place,
        ]);

   }

    public function update($id , $status)
    {
     $date = TimeTable::find( $id);

      $date->Status =  $status;
      $date->save();
        return back();
    }


}
