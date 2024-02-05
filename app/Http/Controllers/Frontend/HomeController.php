<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {

        if (!Session::has('bn'))
        {
            Session::put('en', 'English');
        }
        return view('frontend.home.index');
    }

    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function faq()
    {
        return view('frontend.faq.index');
    }

    public function faitology()
    {
        return view('frontend.story.faitology.index');
    }

    public function brembology()
    {
        return view('frontend.story.brembology.index');
    }

    public function faitotech()
    {
        return view('frontend.story.faitotech.index');
    }

    public function testimonial()
    {
        return view('frontend.story.testimonial.index');
    }

    public function blog()
    {
        return view('frontend.story.news.index');
    }

    public function blogDetails()
    {
        return view('frontend.story.news.blog-details');
    }


    public function changeLanguage ($lanCode)
    {
        if ($lanCode == 'en')
        {
            
                Session::forget('bn');
                Session::put('en', 'English');
        } 
        else {

                Session::forget('en');
                Session::put('bn', 'Bangla');
        
        }
        return redirect()->back();
    }

    

}
