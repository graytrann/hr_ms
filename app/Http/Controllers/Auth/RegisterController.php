<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;

use App\Mail\WelcomeMail;

class RegisterController extends Controller
{
    public function register()
    {
        $role = DB::table('role_type_users')->get();
        return view('auth.register', compact('role'));
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'role_name' => 'required|string|max:255',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                'confirmed',
            ],
            'password_confirmation' => 'required',
        ]);

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();

        $user = User::create([
            'name'      => $request->name,
            'avatar'    => $request->image,
            'email'     => $request->email,
            'join_date' => $todayDate,
            'role_name' => $request->role_name,
            'status'    => 'Active',
            'password'  => Hash::make($request->password),
        ]);

        // Send welcome email
        Mail::to($user->email)->send(new WelcomeMail($user));

        Toastr::success('Create new account successfully :)', 'Success');
        return redirect('login');
    }
}
