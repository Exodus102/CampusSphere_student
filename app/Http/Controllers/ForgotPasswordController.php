<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
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
            return back()
                ->with('email_error', true)
                ->withInput();
        }

     
        session(['password_reset_email' => $student->email]);
        Mail::to($student->email)->send(new ForgotPasswordMail($student));

        return back()->with('success', true);
    }

   
    public function update(Request $request)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $email = session('password_reset_email');

        if (!$email) {
            return redirect()->route('login.login_stud');
        }

        $student = Student::where('email', $email)->first();

        if (!$student) {
            return redirect()->route('login.login_stud');
        }

        
        $student->password = Hash::make($request->password);
        $student->save();

        
        session()->forget('password_reset_email');

        return redirect()->route('login.login_stud')
            ->with('password_updated', true);
    }
}
