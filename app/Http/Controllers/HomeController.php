<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\user;

class HomeController extends Controller
{
    //
    
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype == '0'){
                return view('dashboard');
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
        return view('home.index');
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
