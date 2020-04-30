<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
  * *************************************************
  *                                                 *
  * ******************* Website *******************
  *                                                 *
  * *************************************************
  */
  Route::group(["middleware"=>['currency']],function (){
  Route::get('/Home','Websitecontroller@publish' )->name('home');
Route::get('/Home/{locale}','Websitecontroller@index' )->name('home');
Route::get('/History/{locale}','Websitecontroller@history' );
Route::get('/Our_Services/{locale}','Websitecontroller@allservices' );
Route::get('/Our_Services/{name}/{locale}','Websitecontroller@ourservices' );
Route::get('/Our_Programs/{name}/{locale}','Websitecontroller@ourprograms' );
Route::get('/Service/{name}/{locale}','Websitecontroller@service' );
Route::get('/Program/{name}/{locale}','Websitecontroller@program' );
Route::get('/News/{locale}','Websitecontroller@news');
Route::get('/Place/{locale}','Websitecontroller@place');
Route::get('/Place/{id}/{locale}','Websitecontroller@singl_place');
Route::get('/Hotel/{locale}','Websitecontroller@hotel');
Route::get('/Hotel/{id}/{locale}','Websitecontroller@singl_hotel');
Route::get('/Blog/{locale}','Websitecontroller@blog' );
Route::get('/Gallery/{locale}','Websitecontroller@gallery' );
Route::get('/Contact/{locale}','Websitecontroller@contact' );
Route::post('/Contact_us_message', 'Websitecontroller@contactusMassge')->name('Contact_us_message');

Route::get('/Faq/{locale}','Websitecontroller@faq' );
Route::get('/AGB/{locale}','Websitecontroller@agb' );
Route::post('/First','Websitecontroller@first');
Route::post('/add_book','Websitecontroller@addbooking');

//Route::get('/MyAccount','clientcontroller@myaccount' )->name('account');
Route::get('/Edit_profile/{locale}','Websitecontroller@editprofile' );
Route::get('/User_booking/{locale}','Websitecontroller@userbooking' );
Route::get('/Saved/{locale}','Websitecontroller@saved' );
Route::get('/Message/{locale}','Websitecontroller@message' );
Route::get('/Custom/{id}/{locale}','Websitecontroller@Custom');
Route::get('/Booking/{locale}','Websitecontroller@booking' );
 Route::get('/MyAccount/{locale}','Client_logincontroller@index' );
    Route::get('/Edit_profile/{locale}','Websitecontroller@editprofile' );
    Route::post('/editprofile','Websitecontroller@edit_profile' );

//*************************Search**********//
Route::get('/Main_Search/{locale}','Websitecontroller@main_search' );
Route::get('/place_search/{locale}','Websitecontroller@place_search' );
Route::get('/hotel_search/{locale}','Websitecontroller@hotel_search' );
Route::get('/Hot_Offers/{locale}','Websitecontroller@hotoffers' );
Route::get('/Selected_Tours/{locale}','Websitecontroller@select' );
Route::get('/Become_Partner/{locale}','Websitecontroller@becom' );
Route::get('/Privacy_Policy/{locale}','Websitecontroller@policy' );

Route::get('/Program/save/{prog}/{client}','Websitecontroller@program_save' );
      Route::get('/Service/save/{prog}/{client}','Websitecontroller@service_save' );
      Route::get('/del_serve_save/{id}','Websitecontroller@del_service_save' );
      Route::get('/del_prog_save/{id}','Websitecontroller@del_program_save' );

      Route::get('/MyPassword/{locale}','Websitecontroller@mypass');
      Route::get('/MyBooking/{locale}','Websitecontroller@mybook' );


/*
  **************************************************
  *                                                 *
  *   ******************* Login**************
  *                                                 *
  * *************************************************
  */
Route::post('/User_Login','Client_logincontroller@login' );
Route::post('/Use_register','Client_logincontroller@createclient' );
Route::group(["middleware"=>['client']],function (){
    Route::get('/MyAccount/{locale}','Client_logincontroller@index' );
    Route::get('/Edit_profile/{locale}','Websitecontroller@editprofile' );
    Route::post('/edit_profile','Websitecontroller@edit_profile' );
    Route::post('/up_pass/{id}','Websitecontroller@chang_pass' );
    Route::get('/User_Logout',function (){
        Auth::guard('client')->logout();
        return redirect('/Home/en');

    });
});

});

Route::get('login/facebook', 'Client_logincontroller@redirectToProvider');
Route::get('login/facebook/callback', 'Client_logincontrollerr@handleProviderCallback');

Route::get('currency/{cur}',function ($cur)
{
    if(in_array($cur,['usa','ure']))
    {
        if(session()->has('currency'))
        {
            session()->forget('currency');
        }
        session()->put('currency',$cur);
        //echo "ddd";
    }
    else{
        if(session()->has('currency'))
        {
            session()->forget('currency');
        }
        session()->put('currency','usa');
    }
    //echo session()->get('lang');
    return back();
});


/*
  **************************************************
  *                                                 *
  *   ******************* end Login**************
  *                                                 *
  * *************************************************
  */



/*
  **************************************************
  *                                                 *
  *   ******************* End Website**************
  *                                                 *
  * *************************************************
  */

Route::group(["middleware"=>['auth']],function (){

/*
  * *************************************************
  *                                                 *
  * ******************* admin *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/dashboard','Dashboardcontroller@index' );
Route::get('/gs_admin/admins','Admincontroller@index');
Route::post('/gs_admin/add_admin','Admincontroller@add' );
Route::post('/gs_admin/up_admin/{id}','Admincontroller@update' );
Route::get('/gs_admin/del_admin/{id}','Admincontroller@delete' );
Route::get('/gs_admin/change_pass','Admincontroller@chang' );
Route::post('/gs_admin/up_pass/{id}','Admincontroller@chang_pass' );

/*
  * *************************************************
  *                                                 *
  * ******************* Programs *******************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* Main_Programs *******************
  *                                                 *
  * *************************************************
  
 
  */
  
 Route::post('gs_admin/article_img','Sub_servicecontroller@image' );
Route::get('gs_admin/article_img','Sub_servicecontroller@image' );
 Route::post('gs_admin/upload/article_img','Sub_servicecontroller@uploadimage' );
Route::get('/gs_admin/main_program','Mainprogramcontroller@index' );
Route::post('/gs_admin/up_main_program/{id}','Mainprogramcontroller@update' );
Route::get('/gs_admin/del_main_program/{id}','Mainprogramcontroller@delete' );
Route::post('/gs_admin/add_main_program','Mainprogramcontroller@add' );

/*
  **************************************************
  *                                                 *
  *   ******************* End Main_Programs**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* Admin_Programs *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/admin_program','Admin_programcontroller@index' );
Route::post('/gs_admin/up_admin_program/{id}','Admin_programcontroller@update' );
Route::get('/gs_admin/del_admin_program/{id}','Admin_programcontroller@delete' );
Route::post('/gs_admin/add_admin_program','Admin_programcontroller@add' );

/*
  **************************************************
  *                                                 *
  *   ******************* End Admin_Programs**************
  *                                                 *
  * *************************************************
  */

Route::get('/gs_admin/program','Programecontroller@index' );
Route::get('/gs_admin/c_program','Programecontroller@create' );
Route::get('/gs_admin/e_program/{id}','Programecontroller@edit' );
Route::get('/gs_admin/del_program/{id}','Programecontroller@delete' );
Route::post('/gs_admin/add_program','Programecontroller@add' );
Route::post('/gs_admin/up_program/{id}','Programecontroller@update' );
Route::post('/gs_admin/add_img/{id}','Programecontroller@add_image' );
Route::get('/gs_admin/del_img/{id}','Programecontroller@delete_img' );
Route::get('/gs_admin/active_program/{id}','Programecontroller@active' );
Route::get('/gs_admin/not_active_program/{id}','Programecontroller@notactive' );




/*
  **************************************************
  *                                                 *
  *   ******************* End program**************
  *                                                 *
  * *************************************************
  */



/*
  * *************************************************
  *                                                 *
  * ******************* Main_Service *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/main_service','Servicecontroller@index' );
Route::post('/gs_admin/up_main_service/{id}','Servicecontroller@update' );
Route::get('/gs_admin/del_main_service/{id}','Servicecontroller@delete' );
Route::post('/gs_admin/add_main_service','Servicecontroller@add' );

/*
  **************************************************
  *                                                 *
  *   ******************* End Main_Service**************
  *                                                 *
  * *************************************************
  */
    /*
      * *************************************************
      *                                                 *
      * ******************* Admin_Programs *******************
      *                                                 *
      * *************************************************
      */
    Route::get('/gs_admin/admin_service','admin_servicecontroller@index' );
    Route::post('/gs_admin/up_admin_service/{id}','admin_servicecontroller@update' );
    Route::get('/gs_admin/del_admin_service/{id}','admin_servicecontroller@delete' );
    Route::post('/gs_admin/add_admin_service','admin_servicecontroller@add' );

    /*
      **************************************************
      *                                                 *
      *   ******************* End Admin_Programs**************
      *                                                 *
      * *************************************************
      */


/*
  **************************************************
  *                                                 *
  *   *******************  Services**************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/service','Sub_servicecontroller@index' );
Route::get('/gs_admin/c_service','Sub_servicecontroller@create' );
Route::get('/gs_admin/e_service/{id}','Sub_servicecontroller@edit' );
Route::get('/gs_admin/del_service/{id}','Sub_servicecontroller@delete' );
Route::post('/gs_admin/add_service','Sub_servicecontroller@add' );
Route::post('/gs_admin/up_service/{id}','Sub_servicecontroller@update' );
Route::post('/gs_admin/add_serv_img/{id}','Sub_servicecontroller@add_image' );
Route::get('/gs_admin/del_serv_img/{id}','Sub_servicecontroller@delete_img' );


Route::post('/gs_admin/add_hot/{id}','Sub_servicecontroller@addhotoffer' );
Route::get('/gs_admin/rem_hot/{id}','Sub_servicecontroller@del_hot' );
Route::get('/gs_admin/active_service/{id}','Sub_servicecontroller@active' );
Route::get('/gs_admin/not_active_service/{id}','Sub_servicecontroller@notactive' );


Route::post('/gs_admin/add_level','Sub_servicecontroller@add_level' );
Route::post('/gs_admin/up_level/{id}','Sub_servicecontroller@update_level' );
Route::get('/gs_admin/del_level/{id}','Sub_servicecontroller@del_level' );
/*
  **************************************************
  *                                                 *
  *   ******************* End Services**************
  *                                                 *
  * *************************************************
  */

  Route::get('/gs_admin/messages','Messagecontroller@index' );
    Route::get('/gs_admin/del_message/{id}','Messagecontroller@delete' );


    /*
      **************************************************
      *                                                 *
      *   ******************* End messges**************
      *                                                 *
      * *************************************************
      */

/*
  * *************************************************
  *                                                 *
  * ******************* Written by *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/written','writtencontroller@index' );
Route::post('/gs_admin/up_written/{id}','writtencontroller@update' );
Route::get('/gs_admin/del_written/{id}','writtencontroller@delete' );
Route::post('/gs_admin/add_written','writtencontroller@add' );

/*
  **************************************************
  *                                                 *
  *   ******************* End Written by**************
  *                                                 *
  * *************************************************
  */

    /*
      * *************************************************
      *                                                 *
      * ******************* Admin_Programs *******************
      *                                                 *
      * *************************************************
      */
    Route::get('/gs_admin/gallery','Gallerycontroller@index' );
    Route::post('/gs_admin/up_gallery/{id}','Gallerycontroller@update' );
    Route::get('/gs_admin/del_gallery/{id}','Gallerycontroller@delete' );
    Route::post('/gs_admin/add_gallery','Gallerycontroller@add' );

    /*
      **************************************************
      *                                                 *
      *   ******************* End Admin_Programs**************
      *                                                 *
      * *************************************************
      */

/*
  * *************************************************
  *                                                 *
  * ******************* Test *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/test','Testcontroller@index' );
Route::post('/gs_admin/up_test/{id}','Testcontroller@update' );
Route::get('/gs_admin/del_test/{id}','Testcontroller@delete' );
Route::post('/gs_admin/add_test','Testcontroller@add' );

/*
  **************************************************
  *                                                 *
  *   ******************* End Slider**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* Test *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/slider','Slidercontroller@index' );
Route::post('/gs_admin/up_slider/{id}','Slidercontroller@update' );
Route::get('/gs_admin/del_slider/{id}','Slidercontroller@delete' );
Route::post('/gs_admin/add_slider','Slidercontroller@add' );

/*
  **************************************************
  *                                                 *
  *   ******************* End Slider**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* Why *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/why','Whycontroller@index' );
Route::post('/gs_admin/up_why/{id}','Whycontroller@update' );
Route::get('/gs_admin/del_why/{id}','Whycontroller@delete' );
Route::post('/gs_admin/add_why','Whycontroller@add' );

/*
  **************************************************
  *                                                 *
  *   ******************* End Why**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* Help *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/help','Helpcontroller@index' );
Route::post('/gs_admin/up_help/{id}','Helpcontroller@update' );
Route::get('/gs_admin/del_help/{id}','Helpcontroller@delete' );
Route::post('/gs_admin/add_help','Helpcontroller@add' );
/*
  **************************************************
  *                                                 *
  *   ******************* End Help**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* FAQ *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/faq/{id}','Faqcontroller@index' );
Route::post('/gs_admin/up_faq/{id}','Faqcontroller@update' );
// Route::get('/gs_admin/del_faq/{id}','Faqcontroller@delete' );
// Route::post('/gs_admin/add_faq','Faqcontroller@add' );


   Route::get('/gs_admin/agb/{id}','agbcontroller@index' );
    Route::post('/gs_admin/up_agb/{id}','agbcontroller@update' );
    
    
    Route::get('/gs_admin/policy/{id}','policycontroller@index' );
    Route::post('/gs_admin/up_policy/{id}','policycontroller@update' );
/*
  **************************************************
  *                                                 *
  *   ******************* End FAQ**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* OUR_TEAM *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/team','Ourteamcontroller@index' );
Route::post('/gs_admin/up_team/{id}','Ourteamcontroller@update' );
Route::get('/gs_admin/del_team/{id}','Ourteamcontroller@delete' );
Route::post('/gs_admin/add_team','Ourteamcontroller@add' );

/*
  **************************************************
  *                                                *
  *  ******************* End OUR_TEAM**************
  *                                                *
  * ************************************************
  */


  /*
**************************************************
*                                                 *
*   ******************* End Icon**************
*                                                 *
* *************************************************
*/
    Route::get('/gs_admin/icon','iconcontroller@index');
    Route::get('/gs_admin/show_icon','iconcontroller@show');

    Route::post('/gs_admin/add_icon','iconcontroller@add');
    Route::get('/gs_admin/del_icon/{id}','iconcontroller@delete' );
    Route::post('/gs_admin/up_icon/{id}','iconcontroller@update' );

    /*
      **************************************************
      *                                                 *
      *   ******************* End Icon **************
      *                                                 *
      * *************************************************
      */


    /*
**************************************************
*                                                 *
*   ******************* End Room**************
*                                                 *
* *************************************************
*/
    Route::get('/gs_admin/room','roomcontroller@index');
    Route::post('/gs_admin/add_room','roomcontroller@add');
    Route::get('/gs_admin/c_room','roomcontroller@create' );
    Route::get('/gs_admin/del_room/{id}','roomcontroller@delete' );
    Route::get('/gs_admin/del_icon_room/{id}/{img}','roomcontroller@del_icon' );
    Route::post('/gs_admin/add_room_icon/{id}','roomcontroller@add_icon' );
    Route::post('/gs_admin/up_room/{id}','roomcontroller@update' );
    Route::get('/gs_admin/del_room_img/{id}','roomcontroller@delete_img' );
    Route::get('/gs_admin/e_room/{id}','roomcontroller@edit' );
    Route::post('/gs_admin/add_room_img/{id}','roomcontroller@add_image' );


    /*
      **************************************************
      *                                                 *
      *   ******************* End Icon **************
      *                                                 *
      * *************************************************
      */
      
      Route::get('/gs_admin/detail/{id}','detailcontroller@index' );
Route::get('/gs_admin/c_detail/{id}','detailcontroller@create' );
Route::get('/gs_admin/e_detail/{id}','detailcontroller@edit' );
Route::get('/gs_admin/del_detail/{id}','detailcontroller@delete' );
Route::post('/gs_admin/add_detail/{id}','detailcontroller@add' );
Route::post('/gs_admin/up_detail/{id}','detailcontroller@update' );
      
    /*
      * *************************************************
      *                                                 *
      * ******************* VIDEO*******************
      *                                                 *
      * *************************************************
      */
    Route::get('/gs_admin/vidoe','vidoecontroller@index' );
    Route::post('/gs_admin/up_vidoe/{id}','vidoecontroller@update' );


    /*
      **************************************************
      *                                                *
      *  ******************* End VIDEO**************
      *                                                *
      * ************************************************
      */
    Route::get('/gs_admin/contact','contactcontroller@index' );
    Route::post('/gs_admin/up_contact/{id}','contactcontroller@update' );

/*
  * *************************************************
  *                                                 *
  * ******************* Partners *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/partner','Ourpartnercontroller@index' );
Route::post('/gs_admin/up_partner/{id}','Ourpartnercontroller@update' );
Route::get('/gs_admin/del_partner/{id}','Ourpartnercontroller@delete' );
Route::post('/gs_admin/add_partner','Ourpartnercontroller@add' );

/*
  **************************************************
  *                                                 *
  *   ******************* End Partners**************
  *                                                 *
  * *************************************************
  */

/*
  * *************************************************
  *                                                 *
  * ******************* About *******************
  *                                                 *
  * *************************************************
  */
Route::get('/gs_admin/about/{id}','Aboutcontroller@index' );
Route::post('/gs_admin/up_about/{id}','Aboutcontroller@update' );


/*
  **************************************************
  *                                                 *
  *   ******************* End About**************
  *                                                 *
  * *************************************************
  */

    /*
      **************************************************
      *                                                 *
      *   ******************* End News**************
      *                                                 *
      * *************************************************
      */
    Route::get('/gs_admin/new','Newscontroller@index' );
    Route::get('/gs_admin/c_new','Newscontroller@create' );
    Route::get('/gs_admin/e_new/{id}','Newscontroller@edit' );
    Route::get('/gs_admin/del_new/{id}','Newscontroller@delete' );
    Route::post('/gs_admin/add_new','Newscontroller@add' );
    Route::post('/gs_admin/up_new/{id}','Newscontroller@update' );

    /*
      **************************************************
      *                                                 *
      *   ******************* End News**************
      *                                                 *
      * *************************************************
      */
      
          Route::get('/gs_admin/booking','Bookingcontroller@index' );
  
    Route::get('/gs_admin/del_booking/{id}','Bookingcontroller@delete' );
  

    /*
      **************************************************
      *                                                 *
      *   ******************* End booking**************
      *                                                 *
      * *************************************************
      */
      
      
        /*
    **************************************************
    *                                                 *
    *   ******************* End Places**************
    *                                                 *
    * *************************************************
    */
    Route::get('/gs_admin/place','placecontroller@index' );
    Route::get('/gs_admin/c_place','placecontroller@create' );
    Route::get('/gs_admin/e_place/{id}','placecontroller@edit' );
    Route::get('/gs_admin/del_place/{id}','placecontroller@delete' );
    Route::post('/gs_admin/add_place','placecontroller@add' );
    Route::post('/gs_admin/up_place/{id}','placecontroller@update' );
    Route::post('/gs_admin/add_place_img/{id}','placecontroller@add_image' );
Route::get('/gs_admin/del_place_img/{id}','placecontroller@delete_img' );
    /*
      **************************************************
      *                                                 *
      *   ******************* End Places**************
      *                                                 *
      * *************************************************
      */


    /*
   **************************************************
   *                                                 *
   *   ******************* End Hotel**************
   *                                                 *
   * *************************************************
   */
    Route::get('/gs_admin/hotel','hotelcontroller@index' );
    Route::get('/gs_admin/c_hotel','hotelcontroller@create' );
    Route::get('/gs_admin/e_hotel/{id}','hotelcontroller@edit' );
    Route::get('/gs_admin/del_hotel/{id}','hotelcontroller@delete' );
    Route::post('/gs_admin/add_hotel','hotelcontroller@add' );
    Route::post('/gs_admin/up_hotel/{id}','hotelcontroller@update' );
    Route::post('/gs_admin/add_hotel_img/{id}','hotelcontroller@add_image' );
Route::get('/gs_admin/del_hotel_img/{id}','hotelcontroller@delete_img' );

 Route::get('/gs_admin/del_icon_hotel/{id}/{img}','hotelcontroller@del_icon' );
    Route::post('/gs_admin/add_hotel_icon/{id}','hotelcontroller@add_icon' );

    /*
      **************************************************
      *                                                 *
      *   ******************* End Hotel **************
      *                                                 *
      * *************************************************
      */
      
        /*
 **************************************************
 *                                                 *
 *   ******************* Translation**************
 *                                                 *
 * *************************************************
 */
    Route::get('/gs_admin/home_trans','transcontroller@home' );
    Route::post('/gs_admin/up_home_tran','transcontroller@update');


    Route::get('/gs_admin/page_trans','pagecontroller@home' );
    Route::post('/gs_admin/up_page_tran','pagecontroller@update');


    Route::get('/gs_admin/con_trans','conwordcontroller@index' );
    Route::post('/gs_admin/up_con_tran','conwordcontroller@update');
    Route::get('/gs_admin/book_trans','book_wordcontroller@index' );
    Route::post('/gs_admin/up_book_tran','book_wordcontroller@update');

    /*
      **************************************************
      *                                                 *
      *   ******************* End Translation **************
      *                                                 *
      * *************************************************
      */
      
      
       /*
 **************************************************
 *                                                 *
 *   *******************  Child**************
 *                                                 *
 * *************************************************
 */
    Route::get('/gs_admin/child','childcontroller@index' );
    Route::get('/gs_admin/del_child/{id}','childcontroller@delete' );
    Route::post('/gs_admin/add_child','childcontroller@add' );
    Route::post('/gs_admin/up_child/{id}','childcontroller@update' );

    /*
      **************************************************
      *                                                 *
      *   ******************* End Child **************
      *                                                 *
      * *************************************************
      *
/*
  **************************************************
  *                                                 *
  *   ******************* End admin**************
  *                                                 *
  * *************************************************
  */

    Route::get('/logout',function (){
        auth()->logout();
        return view('auth.login');
    });
});

Auth::routes();




//Route::get('/home', 'HomeController@index');
