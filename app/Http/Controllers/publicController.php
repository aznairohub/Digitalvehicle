<?php

namespace App\Http\Controllers;

use App\Models\punishment;
use App\Models\registration;
use App\Models\addlisence;
use App\Models\addrcbook;
use Illuminate\Http\Request;
use App\Models\savelicenece;
use App\Models\savercbook;

class publicController extends Controller
{
    public function user()
    {
        return view('public.user');
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
        $userid = session('sess');
        $dlid = savelicenece::where('userid', $userid)->where('dlid', $id)->value('dlid');
        // echo $dlid;
        // exit();
        if ($dlid == "") {
            $data['license'] = addlisence::where('id', $id)->get();
            return view('public.savelicenece', $data);
        } else {
            return redirect('/lisence')->with('jsAlert', 'Already Saved');
        }
    }
    public function saveliceneceaction(Request $req, $id)
    {
        $userid = session('sess');
        $licenece = $req->file('proof');
        // echo $pimage;
        // exit();
        $filename = $licenece->getClientOriginalName();
        $licenece->move(public_path() . '/licenece/', $filename);
        $data = [
            'dlid' => $id,
            'userid' => $userid,
            'proof' => $filename
        ];
        savelicenece::insert($data);
        return redirect('/viewdetails');
    }
    public function savercbook($id)
    {
        $userid = session('sess');
        $dlid = savercbook::where('userid', $userid)->where('dlid', $id)->value('dlid');
        // echo $dlid;
        // exit();
        if ($dlid == "") {
            $data['rcbook'] = addrcbook::where('id', $id)->get();
            return view('public.savercbook', $data);
        } else {
            return redirect('/lisence')->with('jsAlert', 'Already Saved');
        }
    }
    public function savercbookaction(Request $req, $id)
    {
        $userid = session('sess');
        $rcbook = $req->file('proof');
        // echo $pimage;
        // exit();
        $filename = $rcbook->getClientOriginalName();
        $rcbook->move(public_path() . '/rcbook/', $filename);
        $data = [
            'dlid' => $id,
            'userid' => $userid,
            'proof' => $filename
        ];
        savercbook::insert($data);
        return redirect('/viewdetails');
    }
    public function viewdetails()
    {
        $userid = session('sess');
        $data['result'] = savelicenece::join('addlisences', 'addlisences.id', '=', 'saveliceneces.dlid')
            ->join('punishments', 'punishments.dlid', '=', 'addlisences.id')
            ->where('saveliceneces.userid', $userid)
            ->where('saveliceneces.status', "verified")
            ->select(
                'saveliceneces.id',
                'saveliceneces.proof',
                // 'addlisences.id',
                'addlisences.username',
                'addlisences.dlno',
                'addlisences.sof',
                'addlisences.address',
                'addlisences.dob',
                'addlisences.bg',
                'addlisences.vf',
                'addlisences.vt',
                'addlisences.cat',
                'punishments.first',
                'punishments.second',
                'punishments.status'
            )
            ->get();
        $data['rc'] = savercbook::join('addrcbooks', 'addrcbooks.id', '=', 'savercbooks.dlid')
            ->where('savercbooks.userid', $userid)
            ->where('savercbooks.status', "verified")
            ->select(
                'savercbooks.id',
                'savercbooks.proof',
                // 'addrcbooks.id',
                'addrcbooks.name',
                'addrcbooks.rto',
                'addrcbooks.model',
                'addrcbooks.class',
                'addrcbooks.fuel',
                'addrcbooks.eno',
                'addrcbooks.cno',
                'addrcbooks.regdate',
                'addrcbooks.fit',
                'addrcbooks.expiry',
                'addrcbooks.regnumber',
                'addrcbooks.color',
                'addrcbooks.unload',
                'savercbooks.status'
            )
            ->get();

        return view('public.saved', $data);
    }
    public function updateprofileaction(Request $req, $id)
    {
        $name = $req->input('name');
        $address = $req->input('address');
        $dob = $req->input('dob');
        $bg = $req->input('bg');
        $height = $req->input('hgt');
        $weight = $req->input('wgt');
        $username = $req->input('username');
        $psd = $req->input('psd');

        $data = [
            'name' => $name,
            'address' => $address,
            'dob' => $dob,
            'bg' => $bg,
            'hgt' => $height,
            'wgt' => $weight,
            'username' => $username,
            'psd' => $psd





        ];
        registration::where('id',$id)->update($data);
        return redirect('/myprofile');
    }
}
