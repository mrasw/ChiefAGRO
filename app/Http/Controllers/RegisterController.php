<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register',['title'=>'Register']);
    }

    public function store(Request $request){
        // return request()->all();
        $validatedData = $request->validate([
            'name'=>'required|regex:/^[A-Za-z\s]+$/|min:3|unique:users',
            'username'=>'required|min:3|max:255|unique:users',
            'password'=>'required|min:5|max:255'
        ]);

        // dd("mantap brooo");

        $validatedData['password']=Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success','Registrasi berhasil! silahkan login');
        return redirect('login');
    }
}
