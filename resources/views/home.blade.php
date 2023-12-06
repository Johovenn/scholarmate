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
<body class="min-vh-100 d-flex flex-column bg-dark text-light">
    <div class="d-flex container mt-3 justify-content-between w-100">
        <div>
            <p class="h3">ScholarMate</p>    
        </div>
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
</body>
</html>