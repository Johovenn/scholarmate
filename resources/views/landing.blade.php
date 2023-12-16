<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScholarMate</title>
    @include('includes.bootstrap')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="icon" href="{{ asset('assets/scholarmateLogo.png') }}">
    @include('includes.icons')
</head>
<body class="min-vh-100">
    <div class="position-fixed w-100 z-3 d-flex justify-content-between px-5 py-3 align-items-center navbar" id='navbar'>
        <img src="assets/scholarmate.png" alt="" width="100px">
        <div class="d-flex">
            <a href="{{ route('auth.register') }}" class="btn btn-outline-warning mx-3">{{ __('landing.register') }}</a>
            <a href="{{ route('auth.login') }}" class="btn btn-warning">Login</a>
        </div>
    </div>
    
    <div class="min-vh-100 position-relative hero">
        <div class="position-absolute top-50 translate-middle start-50 d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-light mb-3" style="text-shadow: 2px 2px 4px black">{{ __('landing.welcome') }}</h1>
            <a href="{{ route('auth.register') }}" class="btn btn-warning">{{ __('landing.start-now') }}</a>
        </div>
    </div>

    <section class="min-vh-100 container d-flex flex-column justify-content-center align-items-center position-relative my-5 ">
        <div class="d-flex mb-5 align-items-center">
            <img src="{{ asset('assets/landingImage1.jpg') }}" width="500px" alt="" class="me-5 rounded">
            <div class="">
                <h2>{{ __('landing.title1') }}</h2>
                <p class="">
                    {{ __('landing.content1') }}
                </p>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div class="me-3 d-flex flex-column justify-content-end">
                <h2>{{ __('landing.title2') }}</h2>
                <p class="text-justify">
                    {{ __('landing.content2') }}
            </div>
            <img src="{{ asset('assets/landingImage2.jpg') }}" width="500px" alt="" class="me-5 rounded">
        </div>
    </section>

    @include('layout.footer')

    <script src="{{ asset('js/landing.js') }}"></script>
</body>
</html>