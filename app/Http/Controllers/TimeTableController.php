<?php

namespace App\Http\Controllers;

use App\Models\TimeTable;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{







    public function show()
    {
        return view('time_table.show_table');
    }







    public function update(Request $request, TimeTable $timeTable)
    {
        //
    }


}
