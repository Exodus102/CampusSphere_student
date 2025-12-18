<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;

class ForgotPasswordController extends Controller
{
    public function showForm()
    {
        return view('login.forgot_password');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $student = Student::where('email', $request->email)->first();

        if (!$student) {
          
            return back()->with('email_error', true)->withInput();
        }

        
        Mail::to($student->email)->send(new ForgotPasswordMail($student));

        return back()->with('success', true);
    }
}
