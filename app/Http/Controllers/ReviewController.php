<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    function index() {
        $reviews = Review::with('user')->where('user_id', Auth::id())->latest()->get();
        return view('dashboard', ['reviews' => $reviews]);
    }

    function show(Review $review) {

        if ($review->user->id !== Auth::id()) {
            abort(403);
        }

        return view('posts.show', ['review' => $review]);
    }

}
