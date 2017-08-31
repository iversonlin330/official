<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;

class OauthController extends Controller
{

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getOauth($type){
        return Socialite::driver($type)->redirect();
    }

    public function getOauthBack($type){
        //$providerUser = Socialite::driver($type)->user();
        try {
            $providerUser = Socialite::driver($type)->user();
        } catch (\Exception $e) {
            return redirect('/');
        }
        //dd($providerUser);
        $account = $type .'_' . $providerUser->id;
        $authUser = User::where('account', $account)->first();
        /*
        if(\App\models\appcenter\Ban_lists
            ::where('account',$account)
            ->where('status',1)
            ->exists()){
            return '帳號資料有異，請連絡相關人員';
        }
        */
        if ($authUser) {
            $authUser->update([
                'name' => ($providerUser->name)? $providerUser->name : $providerUser->nickname,
                'avatar' => $providerUser->avatar,
                'email' => ($providerUser->email)? $providerUser->email : '',
            ]);
            Auth::login($authUser, true);
        }
        else{
           $authUser =  User::create([
                'account' => $account,
                //'source' => $type,
                'name' => ($providerUser->name)? $providerUser->name : $providerUser->nickname,
                'avatar' => $providerUser->avatar,
                'email' => ($providerUser->email)? $providerUser->email : '',
                //'is_third' => 1,
                //'third_id' => $providerUser->id,
            ]);
        }

        Auth::login($authUser, true);

        //return back();
        return redirect('/');
    }
}
