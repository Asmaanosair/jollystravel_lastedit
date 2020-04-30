<?php

namespace App\Http\Controllers;

use App\hotel;
use App\icon;
use App\room;
use App\room_img;
use Illuminate\Http\Request;


class roomcontroller extends Controller
{
    public function index()
    {
        $prog = room::paginate(10);
        $images = room_img::all();
        $icon = icon::all();
        return view('admin.room.room', ['prog' => $prog, 'images' => $images, 'icon' => $icon]);
    }

    public function create()
    {
        $prog = hotel::all();
        $icon = icon::all();

        return view('admin.room.c_room', ['prog' => $prog, 'icon' => $icon]);
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
                's_des_en' => 'required',
                's_des_fr' => 'required',
                's_des_de' => 'required',
                's_des_es' => 'required',
                's_des_it' => 'required',
                'image' => 'required',
                'images' => 'required',
                'max' => 'required',
                 'icon' => 'required',
                'hotel' => 'required',

            ]);
        $test = new room();
        $test->name_en = $request->name_en;
        $test->name_fr = $request->name_fr;
        $test->name_de = $request->name_de;
        $test->name_it = $request->name_it;
        $test->name_es = $request->name_es;
        $test->hotel_id = $request->hotel;
        $test->des_en = $request->s_des_en;
        $test->des_fr = $request->s_des_fr;
        $test->des_de = $request->s_des_de;
        $test->des_it = $request->s_des_it;
        $test->des_es = $request->s_des_es;
         $test->icon = implode(',', $request->icon);
        $test->max_guest = $request->max;


        if ($request->file('image') != null) {
            $filname1 = time() . "." . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img', $filname1);
            $test->m_img = $filname1;
        }
        if ($test->save()) {
            $sub_id = $test->id;

            if (!empty($request->file('images'))) {
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

                    $img2 = new room_img();
                    $img2->img = $row;
                    $img2->room_id = $sub_id;
                    $img2->save();
                }
                if ($img2->save()) {
                    session()->flash("success","Success Adding");
                    return redirect('gs_admin/room');


                }
            }
            return back();
        }


    }

    public function edit($id)
    {
        $pro = room::find($id);
        $prog = hotel::all();

        return view('admin.room.e_room', ['pro' => $pro, 'prog' => $prog]);
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


                'max' => 'required',

                'hotel' => 'required',


            ]);
        $test = room::find($id);
        $test->name_en = $request->name_en;
        $test->name_fr = $request->name_fr;
        $test->name_de = $request->name_de;
        $test->name_it = $request->name_it;
        $test->name_es = $request->name_es;
        $test->hotel_id = $request->hotel;
        $test->des_en = $request->des_en;
        $test->des_fr = $request->des_fr;
        $test->des_de = $request->des_de;
        $test->des_it = $request->des_it;
        $test->des_es = $request->des_es;

        $test->max_guest = $request->max;


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
        $test = room::find($id);
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

            $img2 = new room_img();
            $img2->img = $row;
            $img2->room_id = $id;
            $img2->save();

        }
        if ($img2->save()) {
            session()->flash("success","Success Editing");

            return back();

        }

    }

    function delete_img($id)
    {
        $test = room_img::find($id);
        $test->delete();
        return back();


    }

    function del_icon($id,$img){
        $img2=room::find($id)->icon;
        $images=  explode(",", $img2);
        $key= array_search($img,$images);

        unset($images[$key]);

        $images2=implode(",", $images);
        $img3=room::find($id);
        $img3->icon= $images2;
        $img3->save();
        return back();
    }

    function add_icon(Request $request,$id){
        $img2=room::find($id)->icon;
        $images=  explode(",", $img2);
        $icon=  $request->icon;
        foreach ($icon as $row) {
             array_push($images, $row);

        }


        $images2=implode(",", $images);
        $img3=room::find($id);
        $img3->icon= $images2;
        $img3->save();
        session()->flash("success","Success adding");
        return back();
    }
}
