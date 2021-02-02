<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dymantic\InstagramFeed\Profile as InstagramFeed;

class InstagramAuthController extends Controller
{
    public function show()
    {
        $profile = InstagramFeed::where('username', 'kevingio.id')->first();

        return view('instagram-auth-page', ['instagram_auth_url' => $profile->getInstagramAuthUrl()]);
    }

    public function complete() {
        $was_successful = request('result') === 'success';

        return view('instagram-auth-response-page', ['was_successful' => $was_successful]);
    }

    public function showFeed() {
        // https://github.com/Dymantic/laravel-instagram-feed/blob/master/tutorial.md
        $feed = InstagramFeed::where('username', 'kevingio.id')->first()->refreshFeed(5);
        dd($feed);
    }
}
