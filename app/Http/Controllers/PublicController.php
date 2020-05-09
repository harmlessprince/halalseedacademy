<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function career(){
        return view('career');
    }

    public function news(){
        return view('news');
    }

    public function singleNews(){
        return view('SingleNews');
    }

    public function gallery(){
        return view('gallery');
    }

    public function contact(){
        return view('contact');
    }

    public function whyChoose(){
        return view('whychoose');
    }

    public function applicationForm(){
        return view('formAdmission');
    }

    public function admission(){
        return view('admissionProcedure');
    }

    public function tuition(){
        return view('tuitionPayment');
    }




}
