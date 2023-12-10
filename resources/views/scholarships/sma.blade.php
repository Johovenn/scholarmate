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
        <h2>Showing all scholarships for Senior High School : </h2>
        <div class="row mt-4">
            @foreach ($beasiswas as $beasiswa)
                @include('layout.card')
            @endforeach
        </div>
    </div>

    @include('layout.footer')
</body>
</html>