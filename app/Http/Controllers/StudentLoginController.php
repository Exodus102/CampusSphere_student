<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentLoginController extends Controller
{
    public function showLogin()
    {
        return view('login.login_stud'); // your login blade
    }

    public function login(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'password' => 'required',
        ]);

        $student = Student::where('student_number', $request->student_id)->first();

        if (!$student) {
            return back()->with('error', 'Student ID not found.');
        }

        if (!Hash::check($request->password, $student->password)) {
            return back()->with('error', 'Password is incorrect.');
        }

        if (!$student->is_activated) {
            return back()->with('error', 'Account not activated. Please check your email for credentials.');
        }

        // Log the student in (session-based)
        session(['student_id' => $student->id, 'student_number' => $student->student_number]);

        return redirect()->route('student.home'); // redirect to student home page
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login.show');
    }
}
