<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User;
use App\Models\Social;
use Auth;

class SocialController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $socialite = Socialite::driver('facebook')->user();

        $social = Social::where('provider_user_id', $socialite->id)
                        ->where('provider', 'facebook')->first();

        if ($social) {
            $user = User::where('email', $socialite->email)->first();
            Auth::login($user);
            return redirect('/');
        } else {
            $temp = new Social();
            $temp->provider_user_id = $socialite->id;
            $temp->provider = 'facebook';

             $u = User::where('email', $socialite->email)->first();
             if (!$u) {
                $u = User::create([
                    'name' => $socialite->name,
                    'email' => $socialite->email,
                    'avatar' => $socialite->avatar,
                    'profile' => $socialite->profileUrl,
                    ]);
            }

            $temp->user_id = $u->id;
            $temp->save();

            Auth::login($u);
            return redirect('/');
        }
    }
}
