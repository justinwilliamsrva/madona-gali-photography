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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $review = new Review;
        $review = Review::create([
            'name' => $request->name,
            'message' => $request->message,
            'stars' => $request->stars,
        ]);
        $review->save();

        Session::flash('success', 'Thank you for your rating');

        return redirect()->back();
    }
}
