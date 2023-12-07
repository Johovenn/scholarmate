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
    <div class="position-fixed w-100 z-3 d-flex justify-content-between px-5 py-3 align-items-center navbar" id='navbar'>
        <img src="assets/scholarmate.png" alt="" width="100px">
        <div class="d-flex">
            <a href="{{ route('auth.register') }}" class="btn btn-outline-warning mx-3">Register</a>
            <a href="{{ route('auth.login') }}" class="btn btn-warning">Login</a>
        </div>
    </div>
    
    <div class="min-vh-100 position-relative hero">
        <div class="position-absolute top-50 translate-middle start-50 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-light mb-3" style="text-shadow: 2px 2px 4px black">Paving Paths to Scholarships for You</h1>
            <button class="btn btn-warning">Start Now</button>
        </div>
    </div>

    <div class="min-vh-100 d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/landingImage1.jpg') }}" width="500px" alt="" class="me-5 rounded">
        <div class="w-25">
            <h2>What is ScholarMate?</h2>
            <p class="">
                Welcome to ScholarMate, your comprehensive platform dedicated to bridging the gap between aspiring students and a world of educational possibilities in Indonesia. Whether you're a student in primary school (SD), junior high (SMP), high school (SMA), or pursuing higher education at university (Kuliah), ScholarMate is your go-to resource for discovering a myriad of scholarship opportunities tailored to your educational journey.
            </p>
        </div>
    </div>
    @include('layout.footer')

    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>