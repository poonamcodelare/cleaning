<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Session;

use App\User;


class ProfileController extends Controller
{
    public function index(){

    	$user = Auth::user();
        return view('pages.profile',compact('user'));

    }

    public function upload(Request $request)
    {


        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

      $user = Auth::user();

      $imageName = $user->id.'_profile'.time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('uploads'), $imageName);

        $user->Profile_Image = $imageName;
        $user->save();
      
         Session::flash("success", "You have successfully upload image.");
         return back();



        //  $uploaded_image = User::find($id)->get(['Profile_Image']);
        // $uploaded_image = $uploaded_image[0]->Profile_Image;
        //  $validator = Validator::make($request->all(),
        //     [
        //       'image' =>  'required',
        //     ],
        //     [
        //       'image.required' => trans('auth.imageRequired'),
        //     ]
        // );

        // if ($validator->fails()) {
        //     return back()->withErrors($validator)->withInput();
        // }
          
        // else{   
          
        //     if (Input::hasFile('Profile_Image')) {

        //         $user = Auth::user();
        //          $imageName = $user->id.'_profile'.time().'.'.request()->image->getClientOriginalExtension();

        //         request()->image->move(storage_path('uploads'), $imageName);

        //        $user->Profile_Image = $imageName;
        //        $user->save();
        

        //       if(file_exists('./storage/uploads/'.$uploaded_image)){
                  
        //           unlink('./storage/uploads/'.$uploaded_image);
        //          }

        //       }
        // }
        // Session::flash("success", "You have successfully upload image.");
        //  return back();
            
    }

    public function edit($id)
    {
        $user = Auth::user();
        return view('pages.setting',compact('user','id'));
    }

    public function update(Request $request,$id)
       {
            $user = Auth::user();
           $user->name = $request->input('name');
           $user->Phone_Number = $request->input('phone');
           $user->Address = $request->input('address');
           $user->email = $request->input('email');
           // $user->password = $request->input('password');
           $user->save();
           return redirect('profile');
       }

     public function delete($id)
        {
             $user = Auth::user();
              $user->delete();

              return redirect('/');
        }

}
