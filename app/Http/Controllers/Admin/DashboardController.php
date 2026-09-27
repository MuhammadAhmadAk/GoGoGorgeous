<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Faq;
use App\Models\Inquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'services' => Service::count(),
            'galleries' => Gallery::count(),
            'teams' => Team::count(),
            'testimonials' => Testimonial::count(),
            'faqs' => Faq::count(),
            'inquiries_total' => Inquiry::count(),
            'inquiries_unread' => Inquiry::where('is_read', false)->count(),
        ];

        $latestInquiries = Inquiry::latest()->take(5)->get();
        $recentServices = Service::latest()->take(5)->get();

        return view('backend.dashboard', compact('stats', 'latestInquiries', 'recentServices'));
    }
}
