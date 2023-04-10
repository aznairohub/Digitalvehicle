<?php

namespace App\Http\Controllers;

use App\Models\msg;
use App\Models\registration;
use Illuminate\Http\Request;


class indexcontroller extends Controller
{

     public function index()
    {
         return view('index');
    }
    public function contact()
    {
         return view('contact');
    }

public function contactaction(Request $req)
{
    $first= $req->input('first');
    $second= $req->input('second');
    $third= $req->input('third');
    $msg= $req->input('msg');
$data=[
'first'=>$first,
'second'=>$second,
'third'=>$third,
'msg'=>$msg,




];
msg::insert($data);
return  redirect('/contact');


}
public function complaint()
{
$data['result']=msg::get();
return view('contact',$data);  
}
public function registration()
{
     return view('registration');
}
public function registrationaction(Request $req)
{
    $name= $req->input('name');
    $address= $req->input('address');
    $dob= $req->input('dob');
    $bg= $req->input('bg');
    $height= $req->input('hgt');
    $weight= $req->input('wgt');
    $username= $req->input('username');
    $psd= $req->input('psd');

$data=[
'name'=>$name,
'address'=>$address,
'dob'=>$dob,
'bg'=>$bg,
'hgt'=>$height,
'wgt'=>$weight,
'username'=>$username,
'psd'=>$psd





];
registration::insert($data);
return  redirect('/registration');


}
public function about()
{
     return view('about');
}

public function userlogin()
{
    return view('userlogin');
}

public function userloginaction(Request $req)
{
$username = $req->input('username');
$password = $req->input('password');
//echo $username;
//echo $password;
//exit();
$data = registration::where('username', $username)->where('psd', $password)->first();
//print_r($data);
//exit();
if (isset($data)) {
   $req->session()->put(array('sess' => $data->id));
   return redirect('/public');
} 
else 
{
return redirect('/userlogin')->with('error', 'invalid  username or Password');
}
}
public function logout(Request $req)
{
     $req->session()->forget('sess');
     return redirect('/');
}

}
