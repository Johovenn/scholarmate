<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScholarMate</title>
    @include('includes.bootstrap')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="min-vh-100 d-flex flex-column bg-dark text-light">
    <div class="d-flex container mt-3 justify-content-between w-100">
        <div>
            <p class="h3">Hello, {{ Auth::user()->name }}</p>    
        </div>
        <div class="d-flex">
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger mx-3">Log Out</button>
            </form>
            <ion-icon name="person-circle-outline" class="fs-4xl" size='large'></ion-icon>
        </div>
    </div>
</body>
</html>