<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


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

    	// $avatarName = $user->id.'_profile'.time().'.'.request()->image->getClientOriginalExtension();

		$file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$imgName = addslashes($_FILES['image']['name']);
		$imgSize = getimagesize($_FILES['image']['tmp_name']);
		$des = "D:/xampp/htdocs/cleaning_website/public/uploads/";
		move_uploaded_file($file,$des.$imgName);

        $user->image = $imgName;
        $user->save();

        return back()
            ->with('success','You have successfully upload image.');
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
           $user->phone = $request->input('phone');
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
