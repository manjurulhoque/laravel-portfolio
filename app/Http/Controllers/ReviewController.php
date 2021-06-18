<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('reviews_api');
    }

    public function reviews_api()
    {
        return Review::all();
    }

    public function index()
    {
        $reviews = Review::all();
        $page_title = "Review list";
        return view('pages.reviews.index', compact('reviews', 'page_title'));
    }

    public function create()
    {
        $page_title = "Create review";
        return view('pages.reviews.create', compact('page_title'));
    }

    public function store(Request $request)
    {
        Review::create($request->all());
        return redirect()->route('reviews.index');
    }

    public function show(Review $review)
    {

    }

    public function edit(Review $review)
    {
        $page_title = "Edit review";
        return view('pages.reviews.edit', compact('page_title', 'review'));
    }

    public function update(Request $request, Review $review)
    {
        $review->fill($request->all())->save();
        return redirect()->route('reviews.index');
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('reviews.index');
    }
}
