<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentModel;

use function PHPUnit\Framework\isNull;

class StudentController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function register(){
        return view('register');
    }
    public function create(Request $request){
        // print_r($request->all());
        $request->validate([
            'email' => 'required | email',
            'name' => 'required',
            'password' => 'required'
        ]);

        $std_data = new StudentModel();
        $std_data->email = $request['email'];
        $std_data->name = $request['name'];
        $std_data->password = $request['password'];
        $std_data->save();
        return redirect('/std/view');
        // return view('register');
    }

    public function std_view(){
        $data = StudentModel::all();
        $std_Data = compact('data');
        return view('std-view')->with($std_Data);
    }
    public function Delete($id){
        $user_data = StudentModel::find($id);
        // dd($user_data);
        if(!is_null($user_data)){
            $user_data->delete();
            return redirect('std/view');
            
        }else{
            return redirect('std/view');
            
        }
    }
    public function Edit($id){
        $user_data = StudentModel::find($id);
        // dd($user_data);
        return view('update')->with(['user_data' => $user_data]);

    }
    public function update($id, Request $request){
        $user = StudentModel::find($id);
        // dd($user);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        return redirect('std/view');
    }
}
