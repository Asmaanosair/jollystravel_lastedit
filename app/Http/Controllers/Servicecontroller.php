<?php

namespace App\Http\Controllers;

use App\service;
use Illuminate\Http\Request;

class Servicecontroller extends Controller
{
    public function index(){
        $prog=service::all();

        return view('admin.service.main_service',['prog'=>$prog]);
    }
    function add(Request $request){

        $this->validate($request,
            [

                'name_en'=>'unique:services|required',
                'name_fr'=>'unique:services|required',
                'name_de'=>'unique:services|required',
                'name_es'=>'unique:services|required',
                'name_it'=>'unique:services|required',
                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new service();
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        if($test->save()){
            session()->flash("success","Success ");
            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'name_en'=>'unique:services|required',
                'name_fr'=>'unique:services|required',
                'name_de'=>'unique:services|required',
                'name_es'=>'unique:services|required',
                'name_it'=>'unique:services|required',
                'image'=>'mimes:jpeg,bmp,png',

            ]);
        $test=service::find($id);
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;
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
        $test=service::find($id);
        $test->delete();
        return back();

    }
}
