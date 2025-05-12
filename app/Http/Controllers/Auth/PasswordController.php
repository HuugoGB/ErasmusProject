<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;



class PasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('auth.update-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Check current password
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return back()->withErrors(['current_password' => 'Incorrect current password']);
        }

        // Update password
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->route('index')->with('success', 'Password updated successfully!');
    }
}
