<?php

namespace App\Http\Controllers;

use App\Models\AcceptForm;
use App\Models\Job_place;
use App\Models\RequestForm;
use DateInterval;
use DatePeriod;
use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class AcceptFormController extends Controller
{



    public function create($place_id , $request_form_id , $student_name)
    {
        $place = Job_place::find($place_id);


       return view('accept_form.create',[
           'student'=>$student_name,
           'request_form_id'=>$request_form_id,
           'place'=>$place

           ]);
    }









    public function store($place , $request_form_id)
    {
        $request_form= RequestForm::find($request_form_id);
        $student_id= $request_form->student_id;
        $start_date=$request_form->start_date;

        $end_date=$request_form->end_date;


        $interval = DateInterval::createFromDateString ('1 days') ;

        $daterange = new DatePeriod(new DateTime($start_date), $interval, new DateTime($end_date)) ;
         $a=null;
        foreach($daterange as $date){
            $a[] = $date->format("Y-m-d") ;
        }
        dd($a);
    }







    public function show(AcceptForm $acceptForm)
    {
        //
    }






    public function edit(AcceptForm $acceptForm)
    {
        //
    }






    public function update(Request $request, AcceptForm $acceptForm)
    {
        //
    }





    public function destroy(AcceptForm $acceptForm)
    {
        //
    }
}
