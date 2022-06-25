<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use JeroenG\Flickr\Api;
use JeroenG\Flickr\Flickr;


class GalleryController extends Controller
{

    public function wedding()
    {
        $flickr = new Flickr(new Api('6d5ece12623b1b087c133aacc01cebcc'));
        $data = $flickr->request('flickr.photosets.getPhotos', ['user_id' => '192617798@N05','photoset_id'=>'72177720298463369', 'extras' => 'url_m,url_h', 'per_page' => 500 ]);

        return view('components.gallery')->with(['data' => $data->photoset['photo'], 'title' => 'Wedding Gallery']);
    }

    public function seniors()
    {
        $flickr = new Flickr(new Api('6d5ece12623b1b087c133aacc01cebcc'));
        $data = $flickr->request('flickr.photosets.getPhotos', ['user_id' => '192617798@N05','photoset_id'=>'72177720299529583', 'extras' => 'url_m,url_h', 'per_page' => 500 ]);

        return view('components.gallery')->with(['data' => $data->photoset['photo'], 'title' => 'Seniors Gallery']);
    }

    public function couples()
    {
        $flickr = new Flickr(new Api('6d5ece12623b1b087c133aacc01cebcc'));
        $data = $flickr->request('flickr.photosets.getPhotos', ['user_id' => '192617798@N05','photoset_id'=>'72177720299523812', 'extras' => 'url_m,url_h', 'per_page' => 500 ]);

        return view('components.gallery')->with(['data' => $data->photoset['photo'], 'title' => 'Couples Gallery']);
    }

    public function family()
    {
        $flickr = new Flickr(new Api('6d5ece12623b1b087c133aacc01cebcc'));
        $data = $flickr->request('flickr.photosets.getPhotos', ['user_id' => '192617798@N05','photoset_id'=>'72177720299531713', 'extras' => 'url_m,url_h', 'per_page' => 500 ]);

        return view('components.gallery')->with(['data' => $data->photoset['photo'], 'title' => 'Family Gallery']);
    }

    public function maternity()
    {
        $flickr = new Flickr(new Api('6d5ece12623b1b087c133aacc01cebcc'));
        $data = $flickr->request('flickr.photosets.getPhotos', ['user_id' => '192617798@N05','photoset_id'=>'72177720299533148', 'extras' => 'url_m,url_h', 'per_page' => 500 ]);

        return view('components.gallery')->with(['data' => $data->photoset['photo'], 'title' => 'Maternity Gallery']);
    }

    public function real_estate()
    {
        $flickr = new Flickr(new Api('6d5ece12623b1b087c133aacc01cebcc'));
        $data = $flickr->request('flickr.photosets.getPhotos', ['user_id' => '192617798@N05','photoset_id'=>'72177720299525146', 'extras' => 'url_m,url_h', 'per_page' => 500 ]);

        return view('components.gallery')->with(['data' => $data->photoset['photo'], 'title' => 'Real Estate Gallery']);
    }
}
