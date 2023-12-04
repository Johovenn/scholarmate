<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    @include('includes.bootstrap')
</head>
<body class="min-vh-100 bg-dark">
    <div class="container d-flex position-absolute top-50 start-50 translate-middle h-75 rounded-4">
        <div class="w-25 bg-light h-100 d-flex flex-column justify-content-between align-items-center rounded-2">
            <div class="list-group p-2 w-100">
                <a href="" class="list-group-item active">Update Profile</a>
                <a href="{{ route('change-password') }}" class="list-group-item">Change Password</a>
            </div>
            <form action="{{ route('auth.logout') }}" method="POST" class="mb-3">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
        <div class="w-75 bg-light p-3 rounded-2">
            <h2>Update Profile</h2>
            <form action="" method="POST">
                @csrf
                <div class="form-group d-flex align-items-center p-2 w-50 justify-content-between">
                    <label for="name" class="form-label text-dark me-3">Full Name</label>
                    <input type="text" class="form-control w-75" id="name" name='name' value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group d-flex align-items-center p-2 w-50 justify-content-between">
                    <label for="email" class="form-label text-dark me-3">Email</label>
                    <input type="text" class="form-control w-75" id="email" name='email' value="{{ Auth::user()->email }}">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</body>
</html>