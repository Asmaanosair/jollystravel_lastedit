<?php

namespace App\Http\Controllers;

use App\hotel;
use App\hotel_img;
use App\icon;
use Illuminate\Http\Request;

class hotelcontroller extends Controller
{
    public function index(){
        $prog=hotel::paginate(10);
         $icon = icon::all();
        return view('admin.hotel.hotel',['prog'=>$prog, 'icon' => $icon]);
    }
    public function create(){
  $icon = icon::all();
        $admin=hotel::all();
        return view('admin.hotel.c_hotel',['admin'=>$admin,'icon' => $icon]);
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
                'image'=>'required',
                'icon' => 'required',
                
                 'n_cust'=>'required',
                'n_rest' => 'required',
                 'n_room' => 'required',
               



            ]);
        $test=new hotel();
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;
         $test->loc=$request->loc;

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


   $test->n_cust=$request->n_cust;
        $test->n_rest=$request->n_rest;
        $test->n_room=$request->n_room;
      $test->icon = implode(',', $request->icon);

        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->m_img=$filname1;
        }


        if($test->save()){
            session()->flash("success","Success Adding");

            return back();
        }

    }
    public function edit($id){
        $pro=hotel::find($id);


        return view('admin.hotel.e_hotel',['pro'=>$pro]);
    }
    function update(Request $request ,$id){

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
                's_des_it'=>'required',
                
                 'n_cust'=>'required',
                'n_rest' => 'required',
                 'n_room' => 'required',
                

            ]);
        $test=hotel::find($id);
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        $test->des_en=$request->des_en;
        $test->des_fr=$request->des_fr;
        $test->des_de=$request->des_de;
        $test->des_it=$request->des_it;
        $test->des_es=$request->des_es;
         $test->loc=$request->loc;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;
         $test->n_cust=$request->n_cust;
        $test->n_rest=$request->n_rest;
        $test->n_room=$request->n_room;


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
        $test=hotel::find($id);
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

            $img2 = new hotel_img();
            $img2->img = $row;
            $img2->hotel_id = $id;
            $img2->save();

        }
        if ($img2->save()) {
            session()->flash("success","Success Adding");

            return back();

        }

    }

    function delete_img($id)
    {
        $test = hotel_img::find($id);
        $test->delete();
        return back();


    }
    
    
    function del_icon($id,$img){
        $img2=hotel::find($id)->icon;
        $images=  explode(",", $img2);
        $key= array_search($img,$images);

        unset($images[$key]);

        $images2=implode(",", $images);
        $img3=hotel::find($id);
        $img3->icon= $images2;
        $img3->save();
        return back();
    }

    function add_icon(Request $request,$id){
        $img2=hotel::find($id)->icon;
        $images=  explode(",", $img2);
        $icon=  $request->icon;
        foreach ($icon as $row) {
             array_push($images, $row);

        }


        $images2=implode(",", $images);
        $img3=hotel::find($id);
        $img3->icon= $images2;
        $img3->save();
        return back();
    }
}
