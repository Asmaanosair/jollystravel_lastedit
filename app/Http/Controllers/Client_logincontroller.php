<?php

namespace App\Http\Controllers;
use Auth;
use App\client;
use Socialite;
use App\User;
use App\SocialAccount;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class Client_logincontroller extends Controller
{
    public function __construct()
    {
       // $this->middleware('client');
    }

 function index(){
     return view('website.myaccount');

 }


    public function login( Request $request)
    {
        $this->validate($request, [

            'email' => 'required',
            'password'=>'required'

        ]);
            if(Auth::guard('client')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
                return redirect('MyAccount/en');

            }else {
                Session()->flash('message3',"Please check your email or password $request->email $request->password");
                return back();

            }





}


    
        protected function createclient(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|unique:clients',
                'password' => 'required',

            ]);
        if($request->ajax()) {
            $test = new client();
            $test->name = $request->name;
            $test->email = $request->email;
            $test->password = Hash::make($request['password']);
            if($test->save()){
                Session()->flash('message2', "your account has been created you can login now");

            }else{
                return back();
            }
        }


    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        return $user->name;
    }

//    public function handleProviderCallback($provider = 'facebook')
//    {
//        $providerUser = Socialite::driver($provider)->user();
////        $user = $this->createOrGetUser($provider, $providerUser);
////        auth()->login($user);
////        return redirect()->to('/Home');
//        dd( $providerUser);
//    }
//    public function createOrGetUser($provider, $providerUser)
//    {
//        $account = SocialAccount::whereProvider($provider)
//            ->whereProviderUserId($providerUser->getId())
//            ->first();
//        if ($account) {
//            return $account->user;
//        } else {
//            $user = User::whereEmail($providerUser->getEmail())->first();
//            if (!$user) {
//                $user = User::create([
//                    'email' => $providerUser->getEmail(),
//                    'name' => $providerUser->getName(),
//                    'password' => md5(rand(1,10000)),
//                ]);
//            }
//            $account = new SocialAccount([
//                'provider_user_id' => $providerUser->getId(),
//                'provider' => 'facebook'
//            ]);
//            $account->user()->associate($user);
//            $account->save();
//            return $user;
//        }
//    }
}
