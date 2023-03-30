<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use Hash;

class AdminAuthController extends Controller
{
    public function login(Request $request) {
        if($request->isMethod("POST")) {
            // dd($request->all());
            $validatedData = $request->validate([
                'email' => 'required|string|email|min:6|max:60',
                'password' => 'required|string|min:8'
            ]);
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1])) {
                return redirect('admin/dashboard');
            }
            else {
                return back()->with('invalid_credentials', 'Invalid Email or Password');
            }
        }
        else {
            return view('admin.login');
        }
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function updatePassword(Request $request) {
        if($request->isMethod('POST')) {
            // dd($request->all());
            $validatedPasswords = $request->validate([
                'current_password' => 'required|string|min:8|max:50',
                'new_password' => 'required|string|min:8|max:50|different:current_password',
                'confirm_password' => 'required|same:new_password'
            ]);

            if(Hash::check($validatedPasswords['current_password'], Auth::guard('admin')->user()->password)) {
                Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => Hash::make($validatedPasswords['new_password'])]);
                return back()->with('password_updated', 'Password has been updated successfully');

            }
            else {
                return back()->with('incorrect_password', 'Your current password is incorrect');
            }

        }
        else {
            $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first()->toArray();
            // dd(Auth::guard('admin')->user());
            return view('admin.settings.update_password')->with(compact('adminDetails'));
        }
    }

    public function updateDetails(Request $request) {
        if($request->isMethod('POST')) {
            // dd($request->all());
            $validatedData = $request->validate([
                'name' => 'required|string|min:3|max:30',
                'mobile' => 'required|numeric|min:10|max:11'
            ]);

            Admin::where('id', Auth::guard('admin')->user()->id)->update(['name' => $validatedData['name'], 'mobile' => $validatedData['mobile']]);
                return back()->with('details_updated', 'Details has been updated successfully');

        }
        else {
            $adminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first()->toArray();
            // dd(Auth::guard('admin')->user());
            return view('admin.settings.update_details')->with(compact('adminDetails'));
        }
    }
}
