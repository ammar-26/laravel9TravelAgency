<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Package;
use App\Models\user;

class HomeController extends Controller
{
    //
    
    public static function maincategorylist(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }


    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                return view('home');
            }
            else{
                return view(admin.index);
            }
        }
        else{
            redirect()->back();
        }
    }
    
    public function index(){
        $page = 'home';
        $sliderdata = Package::limit(4)->get();
        $packagelist1 = Package::limit(6)->get();
        $setting = Setting::first();

        return view('home.index',[
            'setting' =>$setting,
            'page' =>$page,
            'sliderdata' => $sliderdata,
            'packagelist1' => $packagelist1
        ]);
    }

    
    public function package($id)
    {
        $data=Package::find($id);
        return view('home.package',[
            'data'=>$data,
        ]);
    }


    public function test(){
        return view('home.test');
    }

    public function param($id, $number){
        //echo "Parameter 1: ", $id;
        //echo "<br> Parameter 2: ", $number;
        //echo "<br> Sum paramerters : ", $id+$number;
        return view('home.test2',
        [
            'id' => $id,
            'number' => $number
        ]);
    }

    public function save(Request $request){
        echo "Save Function";
        echo "<br>First Name : ", $_REQUEST["fname"];
        echo "<br>Last Name : ", $_REQUEST["lname"];
    }

}
