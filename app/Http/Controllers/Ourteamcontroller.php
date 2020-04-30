<?php

namespace App\Http\Controllers;

use App\our_team;
use Illuminate\Http\Request;

class Ourteamcontroller extends Controller
{
    public function index(){
        $prog=our_team::paginate(10);
        return view('admin.our_team.our_team',['prog'=>$prog]);
    }
    public function create(){
        $prog=service::all();

        return view('admin.service.c_service',['prog'=>$prog]);
    }
    function add(Request $request){

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


                'image'=>'required',
                'icon'=>'required',
                'job_en'=>'required',
                'job_fr'=>'required',
                'job_de'=>'required',
                'job_es'=>'required',
                'job_it'=>'required'


            ]);
        $test=new our_team();
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        $test->job_en=$request->job_en;
        $test->job_fr=$request->job_fr;
        $test->job_de=$request->job_de;
        $test->job_it=$request->job_it;
        $test->job_es=$request->job_es;

        $test->fb=$request->fb;
        $test->tw=$request->tw;
        $test->insta=$request->insta;
        $test->vk=$request->vk;
        $test->icon=$request->icon;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;

        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }


        if($test->save()){
            session()->flash("success","Success Adding");

            return back();
        }

    }
    public function edit($id){
        $pro=sub_service::find($id);
        $prog=service::all();

        return view('admin.service.e_service',['pro'=>$pro,'prog'=>$prog]);
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



                'icon'=>'required',
                'job_en'=>'required',
                'job_fr'=>'required',
                'job_de'=>'required',
                'job_es'=>'required',
                'job_it'=>'required'





            ]);
        $test=our_team::find($id);
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        $test->job_en=$request->job_en;
        $test->job_fr=$request->job_fr;
        $test->job_de=$request->job_de;
        $test->job_it=$request->job_it;
        $test->job_es=$request->job_es;

        $test->fb=$request->fb;
        $test->tw=$request->tw;
        $test->insta=$request->insta;
        $test->vk=$request->vk;
        $test->icon=$request->icon;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;

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
    function delete($id){
        $test=our_team::find($id);
        $test->delete();
        return back();

    }
}
