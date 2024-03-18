<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VerificationMailRegister extends Controller
{
    public function verify($token)
    {
        $user = User::where('email_verification_token', $token)->first();

        if (!$user) {
            // Handle invalid token
            return redirect()->route('login')->with('error', 'Invalid token');
        }

        // Update user record
        $user->emailIsVerified = true;
        $user->email_verified_at = now();
        $user->save();

        // Redirect to login page
        return redirect()->route('login')->with('success', 'Email verified successfully');
    }
}
