<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Google_Client;

class AuthController extends Controller
{
    //
    public function redirectToGoogle()
    {
        $googleClient = new Google_Client();
        $googleClient->setClientId(config('services.google.client_id'));
        $googleClient->setClientSecret(config('services.google.client_secret'));
        $googleClient->setRedirectUri(config('services.google.redirect'));
    
        $googleClient->addScope('https://www.googleapis.com/auth/youtube.force-ssl');
    
        return redirect($googleClient->createAuthUrl());
    }

    public function handleGoogleCallback()
{
    $googleClient = new Google_Client();
    $googleClient->setClientId(config('services.google.client_id'));
    $googleClient->setClientSecret(config('services.google.client_secret'));
    $googleClient->setRedirectUri(config('services.google.redirect'));
    $accessToken = $googleClient->fetchAccessTokenWithAuthCode(request('code'));

    // Store the access token and perform further actions.

    return redirect('/videos');
}
}
