<?php

namespace App\Http\Controllers;

use App\Models\punishment;
use App\Models\registration;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function user()
    {
        return view('public.user');
    }
    public function pubpunishment()

    {
        $data['result']=punishment::get();
        return view('public.pubpunishment',$data);  

    }
    public function userlogin()
    {
        return view('/userlogin');
    }
    
  public function loginaction(Request $req)
    {
   $username = $req->input('username');
    $password = $req->input('password');
   $data = registration::where('username', $username)->where('password', $password)->first();
    if (isset($data)) {
       $req->session()->put(array('sess' => $data->id));
       return redirect('/userlogin');
   } 
   else 
   {
    return redirect('/userlogin')->with('error', 'invalid  username or Password');
    }
   }
   public function myprofile(Request $req )
   {
         $id=session('sess');
       $data['sess']=registration::where('id',$id)->get();
        return view('public.myprofile',$data);

   } 





}
