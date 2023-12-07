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
<style>
    .carousel{
        max-width: 600px;
        max-height: 400px;
    }
</style>
<body class="min-vh-100 d-flex flex-column">
    <div class="d-flex container mt-3 justify-content-between align-items-center w-100">
        <img src="{{ asset('assets/scholarmate.png') }}" width="100px" alt="">
        <div class="d-flex align-items-center">
            <div class="me-3">
                <form class="d-flex" role="search" method="POST" action="">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Search</button>
                  </form>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                    <ion-icon name="person-circle-outline" size='large'></ion-icon>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li class="dropdown-item"><a class="text-decoration-none text-dark d-flex align-items-center" href="{{ route('account-settings') }}"><ion-icon name="settings-outline" class="me-2"></ion-icon> Account Settings</a></li>
                    <li class="dropdown-item"><a class="text-decoration-none text-dark d-flex align-items-center" href=""><ion-icon name="language-outline" class="me-2"></ion-icon> Language</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <hr>

    <div class="container position-relative">
        <h2 class="mb-3">Welcome, {{ Auth::user()->name }}</h2>
        
        <div class="w-100 d-flex justify-content-center">
            <div id="carouselExampleCaptions" class="carousel slide mb-3">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/carousel1.jpg') }}" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block shadow-sm">
                            <h5>Create Wonderful Memories</h5>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/carousel2.jpg') }}" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Graduate from University of Singapore</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/carousel3.jpg') }}" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Get Unlimited Resource of Knowledge</h5>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    
        </div>
        
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
                <div class="d-flex flex-column align-items-center p-3 rounded-circle btn btn-outline-warning ms-4 shadow-lg text-dark">
                    <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                    <h5>See All</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>