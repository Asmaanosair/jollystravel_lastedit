<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function index(){
        $row=contact::find(1);
        return view('admin.contact.contact',['row'=>$row]);
    }
    function update(Request $request ,$id){

        $this->validate($request,
            [

                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                'fb'=>'required',
                'tw'=>'required',
                'insta'=>'required',
                'vk'=>'required',
                's_des_it'=>'required',
                's_des_en'=>'required',
                's_des_fr'=>'required',
                's_des_de'=>'required',
                's_des_es'=>'required',

                'w'=>'required',
                't'=>'required',
                'web'=>'required',
                'close'=>'required',
                'name2_en'=>'required',
                'name2_fr'=>'required',
                'name2_de'=>'required',
                'name2_es'=>'required',
                'name2_it'=>'required',






            ]);
        $test=contact::find($id);
        $test->address_en=$request->name_en;
        $test->address_fr=$request->name_fr;
        $test->address_de=$request->name_de;
        $test->address_it=$request->name_it;
        $test->address_es=$request->name_es;
        
            $test->address2_en=$request->name2_en;
        $test->address2_fr=$request->name2_fr;
        $test->address2_de=$request->name2_de;
        $test->address2_it=$request->name2_it;
        $test->address2_es=$request->name2_es;

        $test->day_open=$request->w;
        $test->time_open=$request->t;
        $test->close=$request->close;
        $test->phone=$request->ph;
          $test->phone1=$request->ph1;
        $test->email=$request->mail;

        $test->fb=$request->fb;
        $test->tw=$request->tw;
        $test->insta=$request->insta;
        $test->vk=$request->vk;
        $test->web=$request->web;


        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;




        if($test->save()){

            session()->flash("success","Success Editing");
            return back();
        }

    }
}
