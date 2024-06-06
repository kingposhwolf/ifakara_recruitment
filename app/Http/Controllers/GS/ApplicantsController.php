<?php

namespace App\Http\Controllers\GS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    public function index(){
        return view('secretary.pages.application_jobs');
    }


    public function Requitment(){

        return view ('secretary.pages.Requitment');
    }
}

