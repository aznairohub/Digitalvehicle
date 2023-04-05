<?php

namespace App\Http\Controllers;

use App\Models\punishment;
use App\Models\registration;
use App\Models\addlisence;
use App\Models\addrcbook;
use Illuminate\Http\Request;
use App\Models\savelicenece;

class publicController extends Controller
{
    public function user()
    {
        return view('public.user');
    }
    public function punishment()

    {

        return view('public.punishment');
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
        } else {
            return redirect('/userlogin')->with('error', 'invalid  username or Password');
        }
    }
    public function myprofile(Request $req)
    {
        $id = session('sess');
        $data['sess'] = registration::where('id', $id)->get();
        return view('public.myprofile', $data);
    }
    public function usersearchlicence(Request $req)
    {
        $licence = $req->input('query');
        if ($licence != " ") {

            $records = addlisence::where('dlno', 'LIKE', '%' . $licence . '%')->get();
            return response()->json($records);
        }
    }
    public function lisence()
    {
        return view('public.lisence');
    }
    public function rcbook()
    {
        return view('public.rcbook');
    }

    public function searchpunishment(Request $req)
    {
        $licence = $req->input('query');
        $dlid = addlisence::where('dlno', $licence)->value('id');
        if ($licence != " ") {

            $records = punishment::where('dlid', 'LIKE', '%' . $dlid . '%')->get();
            return response()->json($records);
        }
    }
    public function usersearchrcbook(Request $req)
    {
        $licence = $req->input('query');
        if ($licence != " ") {

            $records = addrcbook::where('regnumber', 'LIKE', '%' . $licence . '%')->get();
            return response()->json($records);
        }
    }
    public function savelicenece($id)
    {
        $data['license'] = addlisence::where('id', $id)->get();
        return view('public.savelicenece', $data);
    }
    public function saveliceneceaction(Request $req, $id)
    {
        $userid=session('sess');
        $licenece = $req->file('proof');
        // echo $pimage;
        // exit();
        $filename = $licenece->getClientOriginalName();
        $licenece->move(public_path() . '/licenece/', $filename);
        $data=[
            'dlid'=>$id,
            'userid'=>$userid,
            'proof'=>$licenece
        ];
        savelicenece::insert($data);
        return redirect('/viewdetails');

    }
}
