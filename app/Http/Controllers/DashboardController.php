<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Checkout;
use App\Models\BookDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $counts = [];
        $counts['genre'] = Genre::all()->count();
        $counts['book'] = Book::all()->count();
        $counts['stock']= BookDetail::all()->count();
        $counts['checkout'] = Checkout::all()->count();
        $counts['recent_checkout'] = Checkout::whereDay('created_at', now()->day)->get()->count();
        $activities = Book::whereDay('created_at', now()->day)->limit(5)->get();
        $checkouts = Checkout::whereDay('created_at', now()->day)->limit(5)->get();

        return view('administrator.dashboard.index', [
            'title' => 'Dashboard',
            'counts' => $counts,
            'activities' => $activities,
            'checkouts' => $checkouts
        ]);
    }
}
