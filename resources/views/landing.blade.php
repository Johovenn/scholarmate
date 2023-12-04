<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScholarMate</title>
    @include('includes.bootstrap')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>
<body class="min-vh-100">

    <div class="d-flex justify-content-between px-5 py-3">
        <p class="h3 text-light">ScholarMate</p>
        <div class="d-flex">
            <a href="{{ route('auth.register') }}" class="btn btn-secondary mx-3">Register</a>
            <a href="{{ route('auth.login') }}" class="btn btn-primary">Login</a>
        </div>
    </div>
    
    <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="text-light" style="text-shadow: 2px 2px 4px black">Paving Paths to Scholarships for You</h1>
    </div>
</body>
</html>