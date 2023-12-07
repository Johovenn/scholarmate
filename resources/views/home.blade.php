<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScholarMate</title>
    @include('includes.bootstrap')
    @include('includes.icons')
</head>
<body class="min-vh-100 d-flex flex-column">
    <div class="d-flex container mt-3 justify-content-between align-items-center w-100">
        <img src="{{ asset('assets/scholarmate.png') }}" width="100px" alt="">
        {{-- <div class=''>
            <a href="" class="d-flex align-items-center"><p>{{ Auth::user()->name }}</p><ion-icon name="person-circle-outline" size='large'></a>
        </div> --}}
        <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                <ion-icon name="person-circle-outline" size='large'></ion-icon>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li class="dropdown-item"><a class="text-decoration-none text-dark d-flex align-items-center" href="{{ route('account-settings') }}"><ion-icon name="settings-outline" class="me-2"></ion-icon> Account Settings</a></li>
                <li class="dropdown-item"><a class="text-decoration-none text-dark d-flex align-items-center" href=""><ion-icon name="language-outline" class="me-2"></ion-icon> Language</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="container">
        <h2 class="mb-5">Welcome, {{ Auth::user()->name }}</h2>
        <div class="d-flex flex-column">
            <h4>Here are scholarships based on your interest : </h4>
            <div class="d-flex align-items-center">
                @foreach ($beasiswas as $beasiswa)
                    <div class="card p-2 mx-3 mt-2 shadow-lg" style="width: 250px">
                        <img class="card-img-top mb-2" src="{{ $beasiswa->image }}" alt="" width="100px" height="100px">
                        <div class="card-top">
                            <h5 class="card-title">{{ $beasiswa->name }}</h5>
                        </div>
                        <p class="card-text">{{ $beasiswa->category }}</p>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, iste?</p>
                        <a href="" class="btn btn-warning">Details</a>
                    </div>
                @endforeach
                <div class="d-flex flex-column align-items-center p-3 rounded-circle btn btn-outline-warning ms-4 shadow-lg">
                    <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                    <h5>See All</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>