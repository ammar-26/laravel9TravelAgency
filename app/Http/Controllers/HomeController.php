<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Category;
use App\Models\Package;
use App\Models\Comment;
use App\Models\Faq;
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
                return redirect('home');
            }
            else{
                return view('admin.index');
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
            'page' => $page,
            'setting' =>$setting,
            'sliderdata' => $sliderdata,
            'packagelist1' => $packagelist1
        ]);
    }


    public function about(){
        $setting = Setting::first();
        return view('home.about',[
            'setting' =>$setting,
        ]);
    }

    public function references(){
        $setting = Setting::first();
        return view('home.references',[
            'setting' =>$setting,
        ]);
    }

    public function contact(){
        $setting = Setting::first();
        return view('home.contact',[
            'setting' =>$setting,
        ]);
    }

    
    public function faq(){
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq',[
            'setting' =>$setting,
            'datalist' =>$datalist
        ]);
    }


    public function storemessage(Request $request){
        $data = new Message();
        $data->name = $request->input( 'name');
        $data->email = $request->input('email');
        $data->phone = $request->input( 'phone');
        $data->subject = $request->input( 'subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank you.');
    }


    public function storecomment(Request $request){
        // dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->package_id = $request->input('package_id');
        $data->subject = $request->input( 'subject');
        $data->comment = $request->input('comment');
        $data->rate = $request->input('rate');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('package', ['id'=>$request->input('package_id')])->with('success', 'Your comment has been sent, Thank you.');
    }

    
    public function package($id)
    {
        $data = Package::find($id);
        $packagelist1 = Package::limit(6)->get();
        $images = DB::table('images')->where('package_id', $id)->get();
        $reviews = Comment::where('package_id',$id)->where('status', 'True')->get();
        return view('home.package', [
            'data' => $data,
            'images' => $images,
            'packagelist1' => $packagelist1,
            'reviews' => $reviews
        ]);
    }

    public function categorypackages($id)
    {
        $category = Category::find($id);
        $packages = DB::table('packages')->where('category_id', $id)->get();
        return view('home.categorypackages', [
            'category' => $category,
            'packages' => $packages
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
