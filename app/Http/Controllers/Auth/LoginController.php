<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Mail\RegisterEmail as MailRegisterEmail;
class LoginController extends Controller
{
    function getLogin(){
        return view('auth.login');
    }
    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect('dashboard');
            }else{
                if($user->verify){
                    return redirect('trang-chu');
                }else{
                    $code = rand(100000,999999);
                    $data  =['code'=> $code];
                    Session::forget('code');
                    Session::push('code',$code);
                    Mail::to($email)->send(new MailRegisterEmail($data));
                    return view('auth.code',['userId'=>$user->id,'userEmail'=>$user->email]);
                }
            }
        }
        else{
            return redirect()->back()->with('notification','Thong tin dang nhap khong hop le');
        }
    }
    function logout(){
        Session::flush();
        return redirect('trang-chu');
    }
}
