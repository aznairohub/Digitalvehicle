<?php

namespace App\Http\Controllers;

use App\Models\addlisence;
use App\Models\addrcbook;
use App\Models\msg;
use App\Models\policereg;
use App\Models\punishment;
use App\Models\registration;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }
    public function addrcbook()
    {
        return view('admin.addrcbook');
    }
    public function viewpublics()
    {
        return view('admin.viewpublics');
    }
    public function viewinssurance()
    {
        return view('admin.viewinssurance');
    }
    public function viewprofile()
    {
        return view('admin.viewprofile');
    }
    public function logout()
    {
        return view('admin.logout');
    }
    public function addrcbookaction(Request $req)
    {
        $name = $req->input('name');
        $rto = $req->input('rto');
        $model = $req->input('model');
        $class = $req->input('class');
        $fuel = $req->input('fuel');
        $eno = $req->input('eno');
        $cno = $req->input('cno');
        $regdate = $req->input('regdate');
        $fit = $req->input('fit');
        $expiry = $req->input('expiry');
        $expin = $req->input('expin');
        $regnumber = $req->input('regnumber');
        $color = $req->input('color');
        $unload = $req->input('unload');
        $data = [
            'name' => $name,
            'rto' => $rto,
            'model' => $model,
            'class' => $class,
            'fuel' => $fuel,
            'eno' => $eno,
            'cno' => $cno,
            'regdate' => $regdate,
            'fit' => $fit,
            'expiry' => $expiry,
            'expin' => $expin,
            'regnumber' => $regnumber,
            'color' => $color,
            'unload' => $unload

        ];
        addrcbook::insert($data);
        return  redirect('/addrcbook');
    }
    public function viewrcbook()
    {
        $data['result'] = addrcbook::get();
        return view('admin.viewrcbook', $data);
    }

    public function addlisence()
    {
        return view('admin.addlisence');
    }

    public function addlisenceaction(Request $req)
    {
        $username = $req->input('username');
        $dlno = $req->input('dlno');
        $sof = $req->input('sof');
        $address = $req->input('address');
        $dob = $req->input('dob');
        $bg = $req->input('bg');
        $cat = $req->input('cat');
        $vf = $req->input('vf');
        $vt = $req->input('vt');
        $data = [
            'username' => $username,
             'dlno' => $dlno,
            'sof' => $sof,
            'address' => $address,
            'dob' => $dob,
            'bg' => $bg,
            'cat' => $cat,
            'vf' => $vf,
            'vt' => $vt

        ];
        addlisence::insert($data);
        return  redirect('/addlisence');
    }
    public function viewlisence()
    {
        $data['result'] = addlisence::get();
        return view('admin.viewlisence', $data);
    }
    public function editlisence($id)
    {
        $data['result'] = addlisence::where('id', $id)->get();
        return view('admin.editlisence', $data);
    }
    public function editliaction(Request $req, $id)
    {
        $username = $req->input('username');
        $dlno = $req->input('dlno');
        $sof = $req->input('sof');
        $address = $req->input('address');
        $dob = $req->input('dob');
        $bg = $req->input('bg');
        $cat = $req->input('cat');
        $vf = $req->input('vf');
        $vt = $req->input('vt');
        $data = [
            'username' => $username,
            'dlno' => $dlno,
            'sof' => $sof,
            'address' => $address,
            'dob' => $dob,
            'bg' => $bg,
            'cat' => $cat,
            'vf' => $vf,
            'vt' => $vt
        ];
        addlisence::where('id', $id)->update($data);
        return redirect('viewlisence');
    }


    public function edit($id)
    {
        $data['result'] = addrcbook::where('id', $id)->get();
        return view('admin.edit', $data);
    }
    public function editaction(Request $req, $id)
    {
        $name = $req->input('name');
        $rto = $req->input('rto');
        $model = $req->input('model');
        $class = $req->input('class');
        $fuel = $req->input('fuel');
        $eno = $req->input('eno');
        $cno = $req->input('cno');
        $regdate = $req->input('regdate');
        $fit = $req->input('fit');
        $expiry = $req->input('expiry');
        $expin = $req->input('expin');
        $regnumber = $req->input('regnumber');
        $color = $req->input('color');
        $unload = $req->input('unload');




        $data = [
            'name' => $name,
            'rto' => $rto,
            'model' => $model,
            'class' => $class,
            'fuel' => $fuel,
            'eno' => $eno,
            'cno' => $cno,
            'regdate' => $regdate,
            'fit' => $fit,
            'expiry' => $expiry,
            'expin' => $expin,
            'regnumber' => $regnumber,
            'color' => $color,
            'unload' => $unload
        ];
        addrcbook::where('id', $id)->update($data);
        return redirect('viewrcbook');
    }
    public function delete($id)
    {
        addrcbook::where('id', $id)->delete();
        return redirect('viewrcbook');
    }
    public function delete1($id)
    {
        addlisence::where('id', $id)->delete();
        return redirect('viewlisence');
    }
    public function viewreg()
    {
        $data['result'] = registration::get();
        return view('admin.viewreg', $data);
    }
    public function viewcontact()
    {
        $data['result'] = msg::get();
        return view('admin.viewcontact', $data);
    }

    public function punishmentview()

    {
        $data['result'] = punishment::get();
        return view('admin.punishmentview', $data);
    }
    public function addpolice()
    {
        return view('admin.addpolice');
    }
    public function addpoliceaction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $email = $req->input('email');
        $data = [
            'username' => $username,
            'password' => $password,
            'email' => $email,

        ];
        policereg::insert($data);
        return  redirect('/addpolice');
    }
    public function viewpolice()
    {
        $data['result'] = policereg::get();
        return view('admin.viewpolice', $data);
    }
    public function adminlogin()
    {
        return view('admin.adminlogin');
    }

}
