<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Devrabiul\ToastMagic\Facades\ToastMagic;
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

    function create() {
        return view('posts.create');
    }

    function destroy(Review $review) {

        if ($review->user->id !== Auth::id()) {
            abort(403);
        }

        $review->delete();

        ToastMagic::success("Review has been deleted successfully!");
        return redirect('/');
    }

}
