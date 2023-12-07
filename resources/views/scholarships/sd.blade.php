<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarmate</title>
    @include('includes.bootstrap')
    @include('includes.icons')
</head>
<body class="min-vh-100 d-flex flex-column position-relative">
    @include('layout.navbar')
    <hr>

    <div class="container">
        <h2>Showing all scholarships for Primary School : </h2>
        <div class="row mt-4">
            @foreach ($beasiswas as $beasiswa)
            <div class="col-md-3 mb-4">
                <div class="card p-2 mx-3 mt-2 shadow" style="width: 250px">
                    <img class="card-img-top mb-2" src="{{ $beasiswa->image }}" alt="" width="100px" height="100px">
                    <div class="card-top">
                        <h5 class="card-title">{{ $beasiswa->name }}</h5>
                    </div>
                    <p class="card-text">{{ $beasiswa->category }}</p>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos, iste?</p>
                    <a href="" class="btn btn-warning">Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('layout.footer')
</body>
</html>