<?php

namespace App\Http\Controllers;

use App\service;
use App\service_img;
use App\sub_service;
use App\sub_program;
use App\User;
use DB;
use App\child;
use App\program_l;
use Illuminate\Http\Request;
Use Alert;

class Sub_servicecontroller extends Controller
{
    public function index(){
        $prog=sub_service::paginate(10);
        $child=child::all();
        return view('admin.service.service',['prog'=>$prog,'child'=>$child]);
    }
    public function create(){
        $prog=sub_program::all();
        $admin=User::all();

        return view('admin.service.c_service',['prog'=>$prog,'admin'=>$admin]);
    }
    function add(Request $request){

        $this->validate($request,
            [

                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                'des_en'=>'required',
                'des_fr'=>'required',
                'des_de'=>'required',
                'des_es'=>'required',
                'des_it'=>'required',
                's_des_en'=>'required',
                's_des_fr'=>'required',
                's_des_de'=>'required',
                's_des_es'=>'required',
                's_des_it'=>'required',
                
                
                'room_en'=>'required',
                'room_fr'=>'required',
                'room_de'=>'required',
                'room_es'=>'required',
                'room_it'=>'required',
          
                'image'=>'required',
              
                'prog'=>'required',
                'guest'=>'required',
                'admin'=>'required',
            


            ]);
        $test=new sub_service();
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;
        
        
         $test->room_en=$request->room_en;
        $test->room_fr=$request->room_fr;
        $test->room_de=$request->room_de;
        $test->room_it=$request->room_it;
        $test->room_es=$request->room_es;

        $test->des_en=$request->des_en;
        $test->des_fr=$request->des_fr;
        $test->des_de=$request->des_de;
        $test->des_it=$request->des_it;
        $test->des_es=$request->des_es;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;
           $test->guest=$request->guest;


 $test->active = $request->active;
  
    
     

        $test->hotoffer = $request->offer;
        $test->start = $request->start;
        $test->end = $request->end;
       
        $test->sale=$request->sale;
        $test->video=$request->link;
        $test->sub_program_id=$request->prog;
        $test->user_id=$request->admin;
   

        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->m_img=$filname1;
        }


        if ($test->save()) {
            $sub_id = $test->id;

        
            if(!empty($request->file('images'))) {
                $files2 = [];
                foreach ($request->file('images') as $media) {
                    if (!empty($media)) {
                        $destinationPath = 'img';
                        $filename2 = $media->getClientOriginalName();
                        $media->move($destinationPath, $filename2);
                        $files2[] = $filename2;
                    }
                }

                foreach ($files2 as $key => $row) {

                    $img2 = new service_img();
                    $img2->img = $row;
                    $img2->sub_service_id = $sub_id;
                    $img2->save();
                }
                if ($img2->save()) {
                    session()->flash("success","Success Adding");
                    return redirect('gs_admin/service');

                }

                  return back();

    }
        }
            return back();

    }
    public function edit($id){
        $pro=sub_service::find($id);
        $prog=sub_program::all();
        $admin=User::all();

        return view('admin.service.e_service',['pro'=>$pro,'prog'=>$prog,'admin'=>$admin]);
    }
    function update(Request $request ,$id){

        $this->validate($request,
            [
                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                
                
                'room_en'=>'required',
                'room_fr'=>'required',
                'room_de'=>'required',
                'room_es'=>'required',
                'room_it'=>'required',
                
                'des_en'=>'required',
                'des_fr'=>'required',
                'des_de'=>'required',
                'des_es'=>'required',
                'des_it'=>'required',
                's_des_en'=>'required',
                's_des_fr'=>'required',
                's_des_de'=>'required',
                's_des_es'=>'required',
                's_des_it'=>'required',
                'guest'=>'required',
             
                'prog'=>'required',
                'admin'=>'required',
                'image'=>'mimes:jpeg,bmp,png',

            ]);
        $test=sub_service::find($id);
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;
        
         $test->guest=$request->guest;
           $test->room_en=$request->room_en;
        $test->room_fr=$request->room_fr;
        $test->room_de=$request->room_de;
        $test->room_it=$request->room_it;
        $test->room_es=$request->room_es;

        $test->des_en=$request->des_en;
        $test->des_fr=$request->des_fr;
        $test->des_de=$request->des_de;
        $test->des_it=$request->des_it;
        $test->des_es=$request->des_es;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;



        $test->sale=$request->sale;
        $test->video=$request->link;
        $test->sub_program_id=$request->prog;
        $test->user_id=$request->admin;

        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->m_img=$filname1;
        }


        if($test->save()){
            session()->flash("success","Success Editing");

            return back();
        }

    }
    function delete($id){
        $test=sub_service::find($id);
        $test->delete();
        return back();

    }
    
      function add_image(Request $request, $id)
    {
        $files = [];
        foreach ($request->file('image') as $media) {
            if (!empty($media)) {
                $destinationPath = 'img';
                $filename = $media->getClientOriginalName();
                $media->move($destinationPath, $filename);
                $files[] = $filename;
            }

        }
        // print_r($files);


        foreach ($files as $key => $row) {

            $img2 = new service_img();
            $img2->img = $row;
            $img2->sub_service_id = $id;
            $img2->save();

        }
        if ($img2->save()) {
            session()->flash("success","Success Editing");

            return back();

        }

    }

    function delete_img($id)
    {
        $test = service_img::find($id);
        $test->delete();
        return back();


    }
    
    
      public function addhotoffer(Request $request,$id)
    {
        $this->validate($request,
            [
                'start' => 'required|date',
                'end' => 'date|after:start'


            ]);

        $test = sub_service::find($id);
        $test->hotoffer=1;
        $test->end=$request->end;
        $test->start=$request->start;
        $test->save();
        session()->flash("success","Success ");
        return back();
    }

    public function del_hot($id)
    {
        $test = sub_service::find($id);
        $test->hotoffer=0;
        $test->end=null;
        $test->start=null;
        $test->save();
        return back();
    }
    
     public function active($id)
    {
        $test = sub_service::find($id);
        $test->active=1;
        $test->save();

        return back();
    }
    public function notactive($id)
    {
        $test = sub_service::find($id);
        $test->active=0;
        $test->save();

        return back();
    }
    
       
     public function del_level($id)
    {
        
        $test = program_l::find($id);
        $test->delete();
        return back();

    
          
    }
    
     function add_level(Request $request)
    {

        $this->validate($request,
            [
                
                'level' => 'required',
                 'price' => 'required',
                 'c_price' => 'required',
           


             ]);
       
            $sub_id = $request->id;
            $price=$request->price;
            $level=$request->level;
          
                $comb = new program_l();
                $comb->price = $price;
                $comb->name = $level;
                $comb->sub_service_id = $sub_id;
                if($comb->save()){
             $level_id = $comb->id;

             $c_price=array_filter($request->c_price);
            $child=array_filter($request->child_id);
            $comp=array_combine($child,$c_price);
            foreach ($comp as $key=>$row){
           
                
               DB::table('children_price_levels')->insert([
    ['price' =>$row, 'program_l_id' =>$level_id,'child_id' => $key]
   
]);

            }
            

          
}
        session()->flash("success","Success ");
                    return back();  

     }
     
         public function image(Request $request){

        $lang='en';
        if($request->file('file')!=null){
            $filname1=time().".".$request->file('files')->getClientOriginalExtension();
            $request->file('files')->move('img',$filname1);
            return $filname1;

        }else{

            return view('admin.imageup',['lang'=>$lang]);
        }


    }


    public function uploadimage(Request $request){
        $this->validate($request,
            [
                'image'=>'required|mimes:jpeg,bmp,png',

            ]);

        $filname1=time().".".$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move('img',$filname1);
        //  echo $filname1;
        return view('admin.imageup',['filname1'=>$filname1]);



    }
    
    

}


