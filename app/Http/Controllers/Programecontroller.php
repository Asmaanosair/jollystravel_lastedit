<?php

namespace App\Http\Controllers;

use App\admin_program;
use App\program;
use App\program_img;
use App\program_l;
use App\sub_program;
use App\User;
use Illuminate\Http\Request;

class Programecontroller extends Controller
{
    public function index()
    {
        $prog = sub_program::paginate(10);
        $images = program_img::all();
        return view('admin.program.program', ['prog' => $prog, 'images' => $images]);
    }

    public function create()
    {
        $prog = program::all();
        $admin = User::all();
        return view('admin.program.c_program', ['prog' => $prog, 'admin' => $admin]);
    }

    function add(Request $request)
    {

        $this->validate($request,
            [
                'name_en' => 'required',
                'name_fr' => 'required',
                'name_de' => 'required',
                'name_es' => 'required',
                'name_it' => 'required',
                'des_en' => 'required',
                'des_fr' => 'required',
                'des_de' => 'required',
                'des_es' => 'required',
                'des_it' => 'required',
                's_des_en' => 'required',
                's_des_fr' => 'required',
                's_des_de' => 'required',
                's_des_es' => 'required',
                's_des_it' => 'required',
              
                'image' => 'required',
                'images' => 'required',
           
           
                'prog' => 'required',
                'admin' => 'required',
                'city' => 'required',
              

            ]);
        $test = new sub_program();
        $test->name_en = $request->name_en;
        $test->name_fr = $request->name_fr;
        $test->name_de = $request->name_de;
        $test->name_it = $request->name_it;
        $test->name_es = $request->name_es;

        $test->des_en = $request->des_en;
        $test->des_fr = $request->des_fr;
        $test->des_de = $request->des_de;
        $test->des_it = $request->des_it;
        $test->des_es = $request->des_es;
        $test->s_des_en = $request->s_des_en;
        $test->s_des_fr = $request->s_des_fr;
        $test->s_des_de = $request->s_des_de;
        $test->s_des_it = $request->s_des_it;
        $test->s_des_es = $request->s_des_es;
        $test->city = $request->city;
     //   $test->c_price = $request->c_price;
        $test->active = $request->active;
      //  $test->price = $request->price;
        $test->sale = $request->sale;
        $test->video = $request->link;

        // $test->hot_offer = $request->offer;
        // $test->start = $request->start;
        // $test->end = $request->end;
        $test->program_id = $request->prog;
        $test->user_id = $request->admin;
        if ($request->file('image') != null) {
            $filname1 = time() . "." . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img', $filname1);
            $test->m_img = $filname1;
        }
         if ($test->save()){
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

                    $img2 = new program_img();
                    $img2->img = $row;
                    $img2->sub_program_id = $sub_id;
                    $img2->save();
                }
                if ($img2->save()) {
                    session()->flash("success","Success Adding");
                    return back();

                
            }
            }
   return back();
         }
        
  
    }

    public function edit($id)
    {
        $pro = sub_program::find($id);
        $prog = program::all();
        $admin = User::all();
        return view('admin.program.e_program', ['pro' => $pro, 'prog' => $prog, 'admin' => $admin]);
    }

    function update(Request $request, $id)
    {

        $this->validate($request,
            [
                'name_en' => 'required',
                'name_fr' => 'required',
                'name_de' => 'required',
                'name_es' => 'required',
                'name_it' => 'required',
                'des_en' => 'required',
                'des_fr' => 'required',
                'des_de' => 'required',
                'des_es' => 'required',
                'des_it' => 'required',
                's_des_en' => 'required',
                's_des_fr' => 'required',
                's_des_de' => 'required',
                's_des_es' => 'required',
                's_des_it' => 'required',
               // 'price' => 'required',
               // 'c_price' => 'required',
                //'link' => 'required',
                'prog' => 'required',
                'admin' => 'required',
                'city' => 'required',
                'image' => 'mimes:jpeg,bmp,png',



            ]);
        $test = sub_program::find($id);
        $test->name_en = $request->name_en;
        $test->name_fr = $request->name_fr;
        $test->name_de = $request->name_de;
        $test->name_it = $request->name_it;
        $test->name_es = $request->name_es;
        $test->des_en = $request->des_en;
        $test->des_fr = $request->des_fr;
        $test->des_de = $request->des_de;
        $test->des_it = $request->des_it;
        $test->des_es = $request->des_es;
        $test->s_des_en = $request->s_des_en;
        $test->s_des_fr = $request->s_des_fr;
        $test->s_des_de = $request->s_des_de;
        $test->s_des_it = $request->s_des_it;
        $test->s_des_es = $request->s_des_es;
        $test->city = $request->city;
        $test->c_price = $request->c_price;
        $test->price = $request->price;
        $test->sale = $request->sale;
        $test->video = $request->link;
        $test->program_id = $request->prog;
        $test->user_id = $request->admin;

        if ($request->file('image') != null) {
            $filname1 = time() . "." . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img', $filname1);
            $test->m_img = $filname1;
        }


        if ($test->save()) {
            session()->flash("success","Success Editing");

            return back();

        }


    }

    function delete($id)
    {
        $test = sub_program::find($id);
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

            $img2 = new program_img();
            $img2->img = $row;
            $img2->sub_program_id = $id;
            $img2->save();

        }
        if ($img2->save()) {

            session()->flash("success","Success Adding");
            return back();

        }

    }

    function delete_img($id)
    {
        $test = program_img::find($id);
        $test->delete();
        return back();


    }

    ////////////////////////Active program///////////////
    /// active
    public function active($id)
    {
        $test = sub_program::find($id);
        $test->active=1;
        $test->save();

        return back();
    }
    public function notactive($id)
    {
        $test = sub_program::find($id);
        $test->active=0;
        $test->save();

        return back();
    }
    
    
    //////////////////////Level//////////
 
}
