<?php

namespace App\Http\Controllers;
use App\client;
use App\about;
use App\contact;
use App\faq2;
use App\agb;
use App\gallery;
use App\help;
use App\news;
use App\message;
use App\place;
use App\hotel;
use App\our_team;
use App\program;
use App\service;
use App\slider;
use App\sub_program;
use App\sub_service;
use App\testimonial;
 use App\save_sub_program;
use App\save_sub_service;
use App\vidoe;
use App\why;
use App\booking;
use App\data;
use App\policy;
use App\frist_cart;
use Config;
use App;
use Mail;
use App\Mail\bookingmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Websitecontroller extends Controller
{
    
        public function publish(){
     
       
        return redirect('/Home/en');
        }

    public function index($locale){
         App::setLocale($locale);
        $slider=slider::all();
        $service=sub_service::all();
        $program=sub_program::all();
        $why=why::all();
        $test=testimonial::all();
         $hot=sub_service::where('hotoffer',1)->get();
        $news=news::orderByRaw('updated_at - created_at DESC LIMIT 3')->get();
        return view('website.home',['slider'=>$slider,'service'=>$service,'program'=>$program,'why'=>$why,'test'=>$test,'news'=>$news,'hot'=>$hot]);
    }
    
      public function select($locale){
         App::setLocale($locale);
      
        $program=program::all();
       
        return view('website.select',['program'=>$program]);
    }
    public function history($locale){
         App::setLocale($locale);
        $about=about::find(1);
        $why=why::all();
        $test=testimonial::all();
        $team=our_team::all();
        return view('website.history',['about'=>$about,'why'=>$why,'test'=>$test,'team'=>$team]);
    }
    public function ourservices($name,$locale){
         App::setLocale($locale);
        $service_id=service::where('name_en',$name)->orwhere('name_fr',$name)->orwhere('name_de',$name)->orwhere('name_it',$name)
            ->orwhere('name_es',$name)
            ->first();
        $sub=sub_service::where('service_id',$service_id['id'])->get();
        $ser=sub_service::all();

        return view('website.ourservices',['sub'=>$sub,'service_id'=>$service_id,'ser'=>$ser]);
    }
    public function allservices($locale){
         App::setLocale($locale);

        $ser=service::all();

        return view('website.Show_all_services',['ser'=>$ser]);
    }
   public function ourprograms($name,$locale){
        App::setLocale($locale);
        $name2=str_replace('_', ' ',$name);
        $service_id=program::where('name_en',$name2)->orwhere('name_fr',$name2)->orwhere('name_de',$name2)->orwhere('name_it',$name2)
            ->orwhere('name_es',$name2)
            ->first();
        $sub=sub_program::where('program_id',$service_id['id'])->get();
        $ser=sub_program::all();
        return view('website.ourprograms',['sub'=>$sub,'service_id'=>$service_id,'ser'=>$ser]);
    }
    
      public function hotoffers($locale){
          App::setLocale($locale);
        // $service_id=program::where('name_en',$name)->orwhere('name_fr',$name)->orwhere('name_de',$name)->orwhere('name_it',$name)
        //     ->orwhere('name_es',$name)
        //     ->first();
        $sub=sub_service::where('hotoffer',1)->paginate(10);
     
        return view('website.hotoffer',['sub'=>$sub]);
    }


    public function service($name,$locale){
         App::setLocale($locale);
        $serv3=sub_service::paginate(3);
        App::setLocale($locale);
        $name2=str_replace('_', ' ',$name);
        $service=sub_service::where('name_en',$name2)->orwhere('name_fr',$name2)->orwhere('name_de',$name2)->orwhere('name_it',$name2)
            ->orwhere('name_es',$name2)
            ->first();

        return view('website.single_service',['service'=>$service,'serv3'=>$serv3]);
    }
    public function program($name,$locale){
         App::setLocale($locale);
        $name2=str_replace('_', ' ',$name);
        $serv5=sub_program::all();
        $service=sub_program::where('name_en',$name2)->orwhere('name_fr',$name2)->orwhere('name_de',$name2)->orwhere('name_it',$name2)
            ->orwhere('name_es',$name2)
            ->first();

        return view('website.single_program',['service'=>$service,'serv5'=>$serv5]);
    }
    public function news($locale){
         App::setLocale($locale);
        $news=news::paginate(4);
        return view('website.news',['news'=>$news]);
    }
    
     public function place($locale){
          App::setLocale($locale);
        $news=place::all();
        return view('website.place',['news'=>$news]);
    }
    
     public function hotel($locale){
          App::setLocale($locale);
       $news=hotel::all();
        return view('website.hotel',['news'=>$news]);
    }
    
    
     public function singl_hotel($id,$locale){
          App::setLocale($locale);
        $news=hotel::find($id);
        return view('website.singl_hotel',['news'=>$news]);
    }
    
      public function singl_place($id,$locale){
           App::setLocale($locale);
        $news=place::find($id);
        return view('website.single_place',['news'=>$news]);
    }
    
    public function blog($locale){
         App::setLocale($locale);
        return view('website.blog');
    }

    public function contact($locale){
        App::setLocale($locale);
        $con=contact::find(1);
        return view('website.contact',['con'=>$con]);
    }

    public function faq($locale){
         App::setLocale($locale);
        // $help=help::all();
        $faq=faq2::find(1);
        // $vid=vidoe::find(1);
        return view('website.help',['faq'=>$faq]);
    }
    public function gallery($locale){
         App::setLocale($locale);
        $gallery=gallery::all();

        return view('website.gallery',['gallery'=>$gallery]);
    }
 
   public function myaccount($locale){
        App::setLocale($locale);
        return view('website.myaccount');
    }
    public function editprofile($locale){
         App::setLocale($locale);
    return view('website.editprofile');
     }
    public function edit_profile(Request $request){
        $this->validate($request,
            [
//                'name'=>'required',
//                'email'=>'required|unique:clients',
//                'fb'=>'required',
//                'insta'=>'required',
//                'address'=>'required',
//                'phone'=>'required',
//                'note'=>'required',
//                'image'=>'mimes:jpeg,bmp,png',
            ]);
        $user=client::find($request->client);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();


        $client=data::where('client_id',$request->client)->get();
        if(count($client)==0){
        $test=new data();

        $test->fb=$request->fb;

        $test->address=$request->address;
        $test->phone=$request->phone;
        $test->inst=$request->insta;
        $test->about=$request->note;
        $test->client_id=$request->client;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }
            if($test->save()){
                return back();
            }
            }else{
            $test1=data::where('client_id',$request->client)->first();

            $test1->fb=$request->fb;

            $test1->address=$request->address;
            $test1->phone=$request->phone;
            $test1->inst=$request->insta;
            $test1->about=$request->note;
            $test1->client_id=$request->client;
            if($request->file('image') !=null)
            {
                $filname1=time().".".$request->file('image')->getClientOriginalExtension();
                $request->file('image')->move('img',$filname1);
                $test1->img=$filname1;
            }

        }
        if($test1->save()){
            return back();
        }
    }
    public function booking($locale){
         App::setLocale($locale);
        return view('website.booking');
    }
      public function agb($locale){
           App::setLocale($locale);
           $agb=agb::find(1);
        return view('website.agb',['agb'=>$agb]);
    }
    
    
        public function custom($id,$locale){
           App::setLocale($locale);
        $slider=slider::all();
        // $child=child::all();
        $sub_prog=sub_program::find($id);

        return view('website.Customize',['slider'=>$slider,'sub_prog'=>$sub_prog]);
    }


   public function first( Request $request ){

        // $this->validate($request,
        //     [
                
        //         'dates'=>'required',
        //       'adult'=>'required',
              
        //       'prog'=>'required',
        //       'nation'=>'required',
        //       'level'=>'required',
               


        //     ]);

      // echo $request->dates;
       $date=explode('-',$request->dates);
       $from=date($date['0']);
       $to=date($date['1']);
        $test=new frist_cart();
        $test->from=$from;
        $test->to=$to;
        $test->Adult=$request->adult;
        $test->child=$request->num_child;
         $test->num_child=implode(',',array_filter($request->child));
         $test->nation=$request->nation;
        $test->sub_service_id=$request->serv;
        $test->program_l_id=$request->level;

      if($test->save()){
          $id=$test->id;
          $cart=frist_cart::find($id);
             return view('website.booking',['cart'=>$cart]);
      }else{
          return back();
      }




    }



    public function addbooking( Request $request ){
        $test=new booking();
        $test->frist_cart_id=$request->cart;
        $test->user_id=$request->user;
        $test->last_name=$request->last;
        $test->first_name=$request->first;
        $test->email=$request->email;
        $test->phone=$request->phone;
        $test->city=$request->city;
        $test->country=$request->country;
        $test->street=$request->street;
        $test->code=$request->code;
        $test->state=$request->state;
        $test->note=$request->note;
        if($test->save()){
//            $book=booking::find($test->id);

            Mail:: send(new App\Mail\bookingmail());

            return redirect("Home");
        }




    }

     public function Main_Search(Request $request,$locale)
    {
 App::setLocale($locale);
        $this->validate($request,
            [
                // 'adults' => 'required',
                // 'child' => 'required',
                'prog' => 'required',
            ]);

        if ($request->adults == null && $request->adults == null && $request->prog == null) {

            return view('website.main_search');
        } else {
            $q = $request->prog;
            $search = sub_program::where('name_en', 'LIKE', '%' . $q . '%' //or 'name_it', 'LIKE', '%' . $q . '%' or 'name_de', 'LIKE', '%'
               // . $q . '%' or 'name_fr', 'LIKE', '%' . $q .
               // '%' or 'name_es', 'LIKE', '%' . $q . '%' or 'city', 'LIKE', '%' . $q . '%'
            )->get();
        }
        if (count($search) > 0) {

            return view('website.main_search',['search'=>$search]);
        } else {

            return view('website.main_search');


        }
    }
    
       public function contactusMassge(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        $test=new message();

        $test->name=$request->name;
        $test->email=$request->email;
        $test->phone=$request->phone;
        $test->subject=$request->subject;
        $test->message=$request->message;


        if($test->save()){
            // alert()->success(trans('main.your_message_send_successfully'));
        return back();
        }
    }
        public function place_search(Request $request,$locale)
    {
        App::setLocale($locale);
        $this->validate($request,
            [
                // 'adults' => 'required',
                // 'child' => 'required',
                'place' => 'required',
            ]);

        if ($request->place == null) {

            return view('website.place_search');
        } else {
            $q = $request->place;
            $search = place::where('name_en', 'LIKE', '%' . $q . '%' //or 'name_it', 'LIKE', '%' . $q . '%' or 'name_de', 'LIKE', '%'
            // . $q . '%' or 'name_fr', 'LIKE', '%' . $q .
            // '%' or 'name_es', 'LIKE', '%' . $q . '%' or 'city', 'LIKE', '%' . $q . '%'
            )->get();
        }
        if (count($search) > 0) {

            return view('website.place_search',['search'=>$search]);
        } else {

            return view('website.place_search');


        }
    }
    
       public function hotel_search(Request $request,$locale)
    {
        App::setLocale($locale);
        $this->validate($request,
            [
                // 'adults' => 'required',
                // 'child' => 'required',
                'hotel' => 'required',
            ]);

        if ($request->hotel == null) {

            return view('website.hotel_search');
        } else {
            $q = $request->hotel;
            $search = hotel::where('name_en', 'LIKE', '%' . $q . '%' //or 'name_it', 'LIKE', '%' . $q . '%' or 'name_de', 'LIKE', '%'
            // . $q . '%' or 'name_fr', 'LIKE', '%' . $q .
            // '%' or 'name_es', 'LIKE', '%' . $q . '%' or 'city', 'LIKE', '%' . $q . '%'
            )->get();
        }
        if (count($search) > 0) {

            return view('website.hotel_search',['search'=>$search]);
        } else {

            return view('website.hotel_search');


        }
    }
    
    
     public function becom($locale){
        App::setLocale($locale);
        $con=contact::find(1);
       
        return view('website.become_partner',['con'=>$con]);
    }
    
     public function policy($locale){
           App::setLocale($locale);
           $agb=policy::find(1);
        return view('website.policy',['agb'=>$agb]);
    }
    function program_save($prog,$client){
            $check=save_sub_program::where('client_id',$client)->where("sub_program_id",$prog)->First();
            if(count($check)==0){
                $save= new save_sub_program() ;
                $save->client_id=$client;
                $save->sub_program_id=$prog;
                if($save->save()){
                    return back();
                }

            }else{
                $unsave=save_sub_program::find($check->id);
                $unsave->delete();
                return back();

            }


    }

    function service_save($prog,$client){
        $check=save_sub_service::where('client_id',$client)->where("sub_service_id",$prog)->First();
        if(count($check)==0){
            $save= new save_sub_service() ;
            $save->client_id=$client;
            $save->sub_service_id=$prog;
            if($save->save()){
                return back();
            }

        }else{
            $unsave=save_sub_service::find($check->id);
            $unsave->delete();
            return back();

        }


    }

    function del_service_save($id){

            $unsave=save_sub_service::find($id);
            $unsave->delete();
            return back();




    }
    function del_program_save($id){

        $unsave=save_sub_program::find($id);
        $unsave->delete();
        return back();




    }
    public function mybook($locale){
        App::setLocale($locale);
        return view('website.mybook');
    }
    public function mypass($locale){
        App::setLocale($locale);
        return view('website.pass');
    }

    function chang_pass(Request $request ,$id){

        $this->validate($request,
            [
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'required|min:6',

            ]);


        $test=client::find($id);
        $test->password=Hash::make($request['password']);
        if($test->save()){
            session()->flash("success","your session expired ");
            return redirect('/User_Logout');
        }

    }
}
