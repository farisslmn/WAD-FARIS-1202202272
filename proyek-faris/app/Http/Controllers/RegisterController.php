<?php

namespace App\Http\Controllers;

use App\Models\User as ModelsUser;
use Illuminate\Auth\Events\Validated;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index () {
        return view('halaman.register');
    }
    public function store (Request $request){
        $validated  = $request -> validate([
            'name' =>'required', 
            'no_hp'=> 'required',
            'email'=>'required',
            'password' => 'required',
        ]);
        
        $validated['password'] = Hash::make($validated['password']);
        ModelsUser::create($validated);
        return redirect('/login');
    }
}

