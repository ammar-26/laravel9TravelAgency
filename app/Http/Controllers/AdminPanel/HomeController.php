<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;


class HomeController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function setting()
    {
        $data = Setting::first();
        if($data==null)
        {
            $data = new Setting();
            $data->title = 'Project Title';
            $data->save();
            $data = Setting::first();
        }

        return view('admin.setting', ['data' => $data]);
    }

    public function settingUpdate(Request $request){
        $id = $request->input('id');
        
        $data = Setting::find($id);
        $data->title = $requset->input('title');
        $data->keywords = $requset->input('keywords');
        $data->description = $requset->input('description');
        $data->company = $requset->input('company');
        $data->address = $requset->input('address');
        $data->phone = $requset->input('phone');
        $data->fax = $requset->input('fax');
        $data->email = $requset->input('email');
        $data->smtpserver = $requset->input('smtpserver');
        $data->smtpemail = $requset->input('smtpemail');
        $data->smtppassword = $requset->input('smtppassword');
        $data->smtpport = $requset->input('smtpport');
        $data->facebook = $requset->input('facebook');
        $data->instagram = $requset->input('instagram');
        $data->twitter = $requset->input('twitter');
        $data->youtube = $requset->input('youtube');
        $data->aboutus = $requset->input('aboutus');
        $data->contact = $requset->input('contact');
        $data->references = $requset->input('references');
        if($request->file('icon')){
            $data->icon=$request->file('icon')->store('images');
        }
        $data->status = $requset->input('status');
        $data->save();
        return redirect()->route('admin.setting');
    }
}
