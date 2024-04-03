<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str; // Import the Str class
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
            'name' => ['required', 'string', 'max:255', 'regex:/^[^\d]*$/'],
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
        $emailVerificationToken = Str::random(60);

        $user = User::create([
            'name'      => $request->name,
            'avatar'    => $request->image,
            'email'     => $request->email,
            'join_date' => $todayDate,
            'role_name' => $request->role_name,
            'status'    => 'Active',
            'password'  => Hash::make($request->password),
            'email_verification_token' => $emailVerificationToken,
        ]);

        // Send welcome email
        // Mail::to($user->email)->send(new WelcomeMail($user));
        Mail::send('emails.welcome', ['emailVerificationToken' => $emailVerificationToken], function ($message) use ($request) {
            $message->from($request->email);
            $message->to('trankhaiphong987@gmail.com');
            $message->subject('Verify Email Notification');
        });

        Toastr::success('Verify in your account:)', 'Success');
        return  view('homepage.verify');
    }
}
