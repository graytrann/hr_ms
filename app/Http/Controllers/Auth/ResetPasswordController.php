<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Hash;
use Brian2694\Toastr\Facades\Toastr;


class ResetPasswordController extends Controller
{
    public function getPassword(Request $request, $token)
    {
        $email = $request->query('email');
        // Lưu email vào session để sử dụng cho old('email')
        session()->flash('reset_email', $email);
        // Trả về view với token và email
        return view('auth.passwords.reset', compact('token', 'email'));
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'email|exists:users',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                'confirmed',
            ],
            'password_confirmation' => 'required',
        ]);

        $updatePassword = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token])->first();
        if (!$updatePassword) {
            Toastr::error('Invalid token! :)', 'Error');
            return back();
        } else {

            $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
            DB::table('password_resets')->where(['email' => $request->email])->delete();
            Toastr::success('Your password has been changed! :)', 'Success');
            return redirect('/login');
        }
    }
}
