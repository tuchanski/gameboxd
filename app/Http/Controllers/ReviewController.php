<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // CREATE

    function create(Request $request) {

        $gameId = $request->query('game_id');
        $title  = html_entity_decode($request->query('title'));
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
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required'],
            'rating'  => ['required', 'numeric', 'min:0', 'max:10'],
            'body'    => ['required', 'string', 'min:10'],
        ]);

        $validated['title'] = html_entity_decode($validated['title']);

        $alreadyReviewed = Review::where('game_id', $validated['game_id'])
            ->where('user_id', Auth::id())
            ->exists();

        if ($alreadyReviewed) {
            ToastMagic::error("You already have a review for this game.");
            return redirect("/");
        }

        Review::create([
            'game_id' => $validated['game_id'],
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'image' => $validated['image'],
            'rating'  => $validated['rating'],
            'body'    => $validated['body'],
        ]);

        ToastMagic::success("Your review has been saved!");
        return redirect('/')
            ->with('success', 'Review published successfully!');
    }

    // READ

    function index() {
        $reviews = Review::with('user')
            ->where('user_id', Auth::id())
            ->latest()
            ->paginate(5);

        return view('dashboard', ['reviews' => $reviews]);
    }

    function show(Review $review) {

        if ($review->user->id !== Auth::id()) {
            abort(403);
        }

        return view('posts.show', ['review' => $review]);
    }

    // UPDATE

    function edit($id) {
        $review = Review::with('user')->where('id', $id)->first();

        if ($review->user()->isNot(Auth::user())) {
            abort(403);
        }

        return view('posts.edit', ['review' => $review]);
    }

    public function update(Request $request, Review $review)
    {
        if ($review->user_id !== Auth::id()) {
            abort(403);
        }

        $validated = $request->validate([
            'rating' => ['required', 'numeric', 'min:0', 'max:10'],
            'body'   => ['required', 'string', 'min:10'],
        ]);

        $review->update($validated);

        ToastMagic::success("Review updated successfully!");
        return redirect('/');
    }

    // DELETE

    function destroy(Review $review) {

        if ($review->user->id !== Auth::id()) {
            abort(403);
        }

        $review->delete();

        ToastMagic::success("Review has been deleted successfully!");
        return redirect('/');
    }
}
