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

    function create(Request $request) {

        $gameId = $request->query('game_id');
        $title = $request->query('title');
        $image = $request->query('image');
        $year = $request->query('year');

        return view('posts.create', [
            'gameId' => $gameId,
            'title' => $title,
            'image' => $image,
            'year' => $year
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'game_id' => ['required', 'integer'],
            'rating'  => ['required', 'numeric', 'min:0', 'max:10'],
            'body'    => ['required', 'string', 'min:10'],
        ]);

        Review::create([
            'game_id' => $validated['game_id'],
            'user_id' => Auth::id(),
            'rating'  => $validated['rating'],
            'body'    => $validated['body'],
        ]);

        return redirect('/')
            ->with('success', 'Review published successfully!');
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
