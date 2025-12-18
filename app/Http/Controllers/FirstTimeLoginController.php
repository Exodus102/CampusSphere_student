<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\FirstTimeLoginMail;

class FirstTimeLoginController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'student_number' => 'required',
            'email' => 'required|email',
        ]);

        $student = Student::where('student_number', $request->student_number)
            ->where('email', $request->email)
            ->first();

       
        if (!$student) {
            return back()->with('error', true);
        }

        if ($student->is_activated) {
            return back()->with('already_activated', true);
        }

        try {
           
            $temporaryPassword = Str::random(10);

            
            $student->update([
                'password' => Hash::make($temporaryPassword),
                'is_activated' => true,
            ]);

          
            Mail::to($student->email)->send(
                new FirstTimeLoginMail($student, $temporaryPassword)
            );

            return back()->with('success', true);

        } catch (\Exception $e) {
            return back()->with('mail_error', true);
        }
    }
}
