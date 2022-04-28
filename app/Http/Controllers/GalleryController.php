<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class GalleryController extends Controller
{
    public function wedding()
    {
        $array = array_filter(Storage::disk('public')->files('images/Wedding'), function ($item) {
            //only png's
            return strpos($item, '.jpeg');
         });
         dd($array);

        return view('galleries.wedding-gallery');
    }
}
