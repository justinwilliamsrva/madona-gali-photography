<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    public function __construct(Request $request)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('reviews', ['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(["name" => 'required', "message" => ['required', 'min:7', 'max:500']]);


        if (strtolower($request->security) != 'black'){
            Session::flash('error', 'Review not sent <br> Failed security question');

            return redirect()->back();
        }

        $review = new Review;
        $review = Review::create([
            'name' => $request->name,
            'message' => $request->message,
            'stars' => $request->stars,
            'security' => $request->security,
        ]);
        $review->save();

        Session::flash('success', 'Thank you for your rating');

        return redirect()->back();
    }
}
