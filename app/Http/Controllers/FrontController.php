<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Interest;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $informations = About::selection()->paginate(1);
        return view('front.about',compact('informations'));
    }

    public function experience(){
        $experiences = Experience::selection()->paginate(PAGINATION_COUNT);
        return view('front.experience',compact('experiences'));
    }

    public function education(){
        $educations = Education::selection()->paginate(PAGINATION_COUNT);
        return view('front.education',compact('educations'));
    }

    public function skills(){
        return view('front.skills');
    }

    public function interests(){
        $interests = Interest::selection()->paginate(PAGINATION_COUNT);
        return view('front.interests',compact('interests'));
    }

    public function awards(){
        $awards = Award::selection()->paginate(PAGINATION_COUNT);
        return view('front.awards',compact('awards'));
    }

}
