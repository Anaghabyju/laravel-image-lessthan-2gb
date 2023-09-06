<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function create(Request $request)
    {
      
       $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users|max:255',
        'password'=>'required',
        'confirm_password'=>'required',
        'image' => 'required|max:2048',
       
    ]);
   
        $path='asset/storage/images/'.$data['image'];
        $filename=time().$request->file('image')->getClientOriginalName();
        $path=$request->file('image')->storeAs('images',$filename,'public');
        $datas["image"]='/storage/'.$path;
        $data['image']=$filename;
       
         User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>$request->password,
        'confirm_password'=>$request->confirm_password,
        'image'=>$filename,
        
       ]);
      
       return redirect()->route('register')->with('success','successfully registerd');
    }
    public function showlogin()
    {
        return view('showlogin');
    }
    public function login(Request $request)
    {
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('showlogin')->with('success','invalid email or password');
        }
    }
    public function dashboard()
    {
       $data=Auth::user();
        return view('dashboard',compact('data'));
    }
   
}
