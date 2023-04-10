<?php

namespace App\Http\Controllers;

use App\Models\addlisence;
use App\Models\addrcbook;
use App\Models\policereg;
use App\Models\punishment;
use Illuminate\Http\Request;

class policeController extends Controller
{
    public function index()
    {
        return view('police.index');
    }
    public function addpunishment()
    {
        $data['result'] = addlisence::get();
        return view('police.addpunishment', $data);
    }
    public function punishmentaction(Request $req, $id)
    {
        $first = $req->input('first');
        $second = $req->input('second');
        $data = [
            'first' => $first,
            'second' => $second,
            'dlid' => $id
        ];
        punishment::insert($data);
        return  redirect('/addpunishment');
    }
    public function ppunishment($id)
    {
        $data['result'] = addlisence::where('id', $id)->get();
        return view('police.ppunishment', $data);
    }

    public function viewpunishment()
    {
        $data['result'] = punishment::join('addlisences', 'addlisences.id', '=', 'punishments.dlid')
            ->select('addlisences.dlno', 'addlisences.username', 'punishments.id', 'punishments.first', 'punishments.second', 'punishments.status')
            ->get();
        return view('police.viewpunishment', $data);
    }
    public function login()
    {
        return view('police.login');
    }

    public function policeloginaction(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $data = policereg::where('email', $email)->where('password', $password)->first();
        if (isset($data)) {
            $req->session()->put(array('sess' => $data->id));
            return redirect('/policeindex');
        } else {
            return redirect('/police')->with('error', 'invalid  username or Password');
        }
    }
    public function policeprofile(Request $req)
    {
        $id = session('sess');
        $data['result'] = policereg::where('id', $id)->get();
        return view('police.policeprofile', $data);
    }

    //
    public function viewrdetails()
    {
        $data['result'] = addrcbook::get();
        return view('police.viewrdetails', $data);
    }
    public function viewldetails()
    {
        $data['result'] = addlisence::get();
        return view('police.viewlicenece', $data);
    }


    public function searchRc(Request $req)
    {
        $rcdetails = $req->input('query');
        if ($rcdetails != " ") {

            $records = addrcbook::where('regnumber', 'LIKE', '%' . $rcdetails . '%')->get();
            return response()->json($records);
        }
    }
    public function viewpolicelicence()
    {
        $data['result'] = addlisence::get();
        return view('police.viewlicence', $data);
    }
    public function searchlicence(Request $req)
    {
        $licence = $req->input('query');
        if ($licence != " ") {

            $records = addlisence::where('dlno', 'LIKE', '%' . $licence . '%')->get();
            return response()->json($records);
        }
    }
    public function policeprofileaction(Request $req, $id)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $email = $req->input('email');
        $data = [
            'username' => $username,
            'password' => $password,
            'email' => $email,

        ];
        policereg::where('id',$id)->update($data);
        return redirect('/policeprofile');
    }
    public function changestatus($id)
    {
        $data['result']=punishment::where('id',$id)->get();
        return view('police.changestatus',$data);
    }
    public function changestatusaction(Request $req, $id)
    {
        $status=$req->input('status');
        $data=['status'=>$status];
        punishment::where('id',$id)->update($data);
        return redirect('/viewpunishment');
    }
}
