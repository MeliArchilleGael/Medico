<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function index() {
        // dd(\auth()->guard()->);
        return view('backend.Profile.index');
    }

    public function edit() {
        return view('backend.Profile.edit');
    }

    public function store(Request $request) {


        $path = '';
        if ($request->hasFile('profile')) {
            $path = $request->file('profile')->store('/profile', 'public');
        }

        Auth::user()->update(array_merge([
            $request->only('name', 'telephone', 'address'),
            [
                'profile' => $path,
            ]
        ]));

        return redirect()->route('auth.profile.index')
            ->with('message', 'Profile Update successfully')
            ->with('type', 'success');
    }

    public function password() {
        return view('backend.Profile.password');
    }

    public function update(Request $request){
        $request->validate([
            'cur_password' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'required|same:new_password'
        ]);

        $user = Auth::user();

        if (Hash::check($request->input('cur_password'), $user->password)) {
            $user->password = Hash::make($request->input('new_password'));
            $user->update();
            return back()
                ->with('message', 'Password Updated Successfully')
                ->with('type', 'success');
        } else {
            return back()
                ->with('message', 'Current Password Mismatch')
                ->with('type', 'error');
        }
    }
}
