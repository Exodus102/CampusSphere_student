<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Home</title>
</head>
<body>
    <h1>Welcome, {{ session('student_number') }}</h1>
    <form method="POST" action="{{ route('student.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
