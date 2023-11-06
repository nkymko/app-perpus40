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

        return view('administrator.dashboard.index', [
            'title' => 'Dashboard',
            'counts' => $counts,
        ]);
    }
}
