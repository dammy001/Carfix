<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class SocialAuthFacebookController extends Controller
{
    public function redirect(){

    	return Socialite::driver('facebook')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback()
    {
	       $userSocial = Socialite::driver('facebook')->user();
		  //return $userSocial;
		  $finduser = User::where('facebook_id', $userSocial->id)->first();
		  if($finduser){
		      Auth::login($finduser);
		      return redirect()->to('/');
          }
          else{
		  $new_user = User::create([
		        'name'      => $userSocial->name,
		        'email'      => $userSocial->email,
		        'image'  => $userSocial->avatar_original,
		        'facebook_id'=> $userSocial->id,
		        'password' => md5(rand(1,10000))

		    ]);
		    Auth::login($new_user);
		    return redirect()->back();
		}
    }
}
