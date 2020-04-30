<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index(){
        $user=User::paginate(10);

        return view('admin.admins.admin',['user'=>$user]);
    }
    
      public function chang(){
     

        return view('admin.admins.chang');
    }

    function add(Request $request){

        $this->validate($request,
            [
                'name' => 'required|max:200|string',
                'role' => 'required',
                'email' => 'required|unique:users|max:200',
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'required|min:6',

            ]);


        $test=new User();
        $test->name=$request->name;
        $test->email=$request->email;
        $test->roles=$request->role;
        $test->password=Hash::make($request['password']);
        if($test->save()){
            session()->flash("success","Success Adding");
            return back();
        }



    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'name' => 'required|max:200|string',
                'role' => 'required',
                'email' => 'required|max:200',
                'image'=>'mimes:jpeg,bmp,png',

            ]);
            
        $test=User::find($id);
        $test->name=$request->name;
        $test->email=$request->email;
        $test->roles=$request->role;
          if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->image=$filname1;
        }


        if($test->save()){

            session()->flash("success","Success Editing");

            return back();
        }

    }
    function delete($id){
        $test=User::find($id);
        $test->delete();
        return back();

    }
    
       function chang_pass(Request $request ,$id){

        $this->validate($request,
            [
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'required|min:6',

            ]);


        $test=User::find($id);
        $test->password=Hash::make($request['password']);
        if($test->save()){
            session()->flash("success","your session expired ");
            return redirect('/logout');
        }
        
       }
}
