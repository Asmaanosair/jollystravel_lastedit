<?php

namespace App\Http\Controllers;

use App\about;
use Illuminate\Http\Request;

class Aboutcontroller extends Controller
{
    public function index($id){
        $pro=about::find($id);
        return view('admin.about.about',['pro'=>$pro]);
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
                'link'=>'required',
                'image'=>'mimes:jpeg,bmp,png',
                  'o_des_en'=>'required',
                'o_des_fr'=>'required',
                'o_des_de'=>'required',
                'o_des_es'=>'required',
                'o_des_it'=>'required'



            ]);
        $test=about::find($id);
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
        
        
         $test->o_des_en=$request->o_des_en;
        $test->o_des_fr=$request->o_des_fr;
        $test->o_des_de=$request->o_des_de;
        $test->o_des_it=$request->o_des_it;
        $test->o_des_es=$request->o_des_es;

        $test->s_des_en=$request->s_des_en;
        $test->s_des_fr=$request->s_des_fr;
        $test->s_des_de=$request->s_des_de;
        $test->s_des_it=$request->s_des_it;
        $test->s_des_es=$request->s_des_es;

        $test->video=$request->link;


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
}
