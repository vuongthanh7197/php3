<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\classRoom;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index(){
       $admins = admin::find(1);
       //lấy ra admin kèo classRoom
       $admins =  $admins->load('classRoom');
        // $admins =  $admins->with('classRoom')->get();
       // return view('admin.admin', ['admins'=> $admins]);
       //lấy riêng classRôm của admin
    //   $class = $admins->classRoom
    // $class = $admins->classRoom()->get();
    //   dd($admins);
      
    
   }

   // public function indexClass(){
   //      $class = classRoom::find(1);
   //      $admins=$class->admins->toArray();
   //      $class = $class->load('admins');
   //      dd($admins);
   // }
   public function getLogin() {
    if (Auth::check()) {
         return redirect()->route('classes.list');
      }
        return view('admin.login');
      
   }
   public function getRegister(){
       return view('admin.register');
   }
   public function logout(){
      Auth::logout();
      return view('admin.login');
   }
   public function postLogin(Request $request){
      //kiểm tra đã login chưa 
      if (Auth::check()) {
         return redirect()->route('classes.list');
      }
      //nếu chưa login thì chạy xuống dưới 
      $this->validate($request , [
            'email' => 'required|email|exists:admins|min:6|max:32',
            'password' =>'required|min:6',
      ]);
      // check validate , lấy ra dữ liệu 
      $data = $request->only(['email' , 'password']);
     
      // KIỂM TRA ĐĂNG NHẬP EMAIL VÀ PASSWWORD VỪA NHẬN
      $checklogin = Auth::attempt($data);
      if ($checklogin) {
         return redirect()->route('classes.list');
      }
      else {
         return redirect()->route('admins.getLogin');
      }
   } 
   public function postRegister(Request $request) {
         $this->validate($request , [
                     'name' => 'required|min:6',
                     'email' => 'required|email|unique:admins|min:6|max:32',
                     'password' =>'required|min:6',
                     'repassword' => 'required_with:password|same:password|min:6',
                     'university' => 'required'

               ]);
               $data = $request->except('_token');
               $admin = new admin();
               $admin->name = $data['name'];
               $admin->email = $data['email'];
               $admin->password = $data['password'];

   }
}
