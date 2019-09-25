<?php


namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;

class Birthday
{
    public function calculator(Request $request)
    {

        $dateOfbirthday = $request->input('birthday');
        $year = Carbon::parse($dateOfbirthday)->age;
        dd($year);
    }
}
