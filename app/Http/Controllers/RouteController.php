<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Inquiry;

class RouteController extends Controller{

    public function index(){
        $services = Service::active()->orderBy('order', 'asc')->get();
        $galleries = Gallery::active()->orderBy('order', 'asc')->take(6)->get();
        $teams = Team::active()->orderBy('order', 'asc')->take(3)->get();
        $testimonials = Testimonial::active()->orderBy('order', 'asc')->get();
        $faqs = Faq::active()->orderBy('order', 'asc')->get();

        return view('frontend.index', compact('services', 'galleries', 'teams', 'testimonials', 'faqs'));
    }

    public function about(){
        $teams = Team::active()->orderBy('order', 'asc')->take(3)->get();
        return view('frontend.pages.about', compact('teams'));
    }

    public function services(){
        $services = Service::active()->orderBy('order', 'asc')->get();
        $faqs = Faq::active()->orderBy('order', 'asc')->get();
        return view('frontend.pages.services', compact('services', 'faqs'));
    }
    
    public function gallery(){
        $galleries = Gallery::active()->orderBy('order', 'asc')->get();
        return view('frontend.pages.gallery', compact('galleries'));
    }

    public function team(){
        $teams = Team::active()->orderBy('order', 'asc')->get();
        return view('frontend.pages.team', compact('teams'));
    }

    public function contact(){
        $services = Service::active()->orderBy('order', 'asc')->get();
        return view('frontend.pages.contact', compact('services'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        Inquiry::create([
            'first_name' => $validated['fname'],
            'last_name' => $validated['lname'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'service' => $validated['service'],
            'message' => $validated['message'],
        ]);

        return back()->with('success', 'Thank you! Your message has been sent successfully. We will get back to you soon.');
    }

    public function notFound(){
        return response()->view('errors.404', [], 404);
    }
}

