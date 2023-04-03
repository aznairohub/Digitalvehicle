<?php

namespace App\Http\Controllers;

use App\Models\addrcbook;
use App\Models\policereg;
use App\Models\punishment;
use App\Models\registration;
use Illuminate\Http\Request;

class policeController extends Controller
{
    public function index()
    {
        return view('police.index');
    }
    public function addpunishment()
    {
        $data['result']=registration::get();
      return view('police.addpunishment',$data);  

    }
    public function ppunishment( Request $req)
    {
        return view('police.ppunishment');
    }
    public function punishmentaction(Request $req)
    {
        $first= $req->input('first');
        $second= $req->input('second');
    $data=[
    'first'=>$first,
    'second'=>$second,
    ];
    punishment::insert($data);
    return  redirect('/addpunishment');
    
    
    }
    
    public function viewpunishment()
    {
        $data['result']=punishment::get();
        return view('police.viewpunishment',$data);  

    }
    public function viewrdetails()
    {
        
        return view('police.viewrdetails');
    }
    //    public function rdetailaction() 
    // {

    //     $id=session('sess');
    //     $data['sess']=addrcbook::where('id',$id)->get();
    //      return view('viewrdetails',$data);
    // }
    public function searchRc(Request $req)
    {
        $rcdetails = $req->input('query');
        if ($rcdetails != " ") {

            $records = addrcbook::where('regnumber', 'LIKE', '%' . $rcdetails . '%')->get();
            return response()->json($records);
        }
    }
    public function login()
    {
        return view('police.login');
    }
    
  public function ploginaction(Request $req)
    {
   $username = $req->input('username');
    $password = $req->input('password');
    echo $username;
    echo $password;
   $data =policereg::where('username', $username)->where('password', $password)->first();

    if (isset($data)) {
       $req->session()->put(array('sess' => $data->id));
       return redirect('/police');
   } 
   else 
   {
    return redirect('/login')->with('error', 'invalid  username or Password');
    }
   }
   public function policeprofile(Request $req )
   {
         $id=session('sess');
       $data['sess']=policereg::where('id',$id)->get();
        return view('police.policeprofile',$data);

   } 



}
