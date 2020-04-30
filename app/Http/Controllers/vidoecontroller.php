<?php

namespace App\Http\Controllers;

use App\vidoe;
use Illuminate\Http\Request;

class vidoecontroller extends Controller
{
    public function index(){
        $prog=vidoe::all();

        return view('admin.video.video',['prog'=>$prog]);
    }

    function update(Request $request,$id){
        $this->validate($request,
            [
                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                's_des_en'=>'required',
                's_des_fr'=>'required',
                's_des_de'=>'required',
                's_des_es'=>'required',
                's_des_it'=>'required',
                'link'=>'required',


            ]);


        $test=vidoe::find($id);
        $test->title_en=$request->name_en;
        $test->title_fr=$request->name_fr;
        $test->title_de=$request->name_de;
        $test->title_it=$request->name_it;
        $test->title_es=$request->name_es;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;
        $test->link=$request->link;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }





        if($test->save()){

            session()->flash("success","Success Editing");

            return back();
        }

    }

}
