<?php

namespace App\Providers;

use App\about;
use App\contact;
use App\news;
use App\ourpartner;
use App\program;
use App\service;
use App\slider;
use App\sub_program;
use App\home_word;
use App\sub_service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          $tran=home_word::find(1);
        $prog=program::all();
        $serv=service::all();
        $news5=news::orderBy('id', 'DESC')->take(3)->get();
        $con=contact::find(1);
        $about=about::find(1);
        $part=ourpartner::all();
        $s=slider::find(1);
         return view()->share(['prog'=>$prog,'serv'=>$serv,'news5'=>$news5,
             'con'=>$con,'about'=>$about,'part'=>$part,'s'=>$s,'tran'=>$tran]);

    }
}
