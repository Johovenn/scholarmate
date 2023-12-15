<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Settings</title>
    @include('includes.bootstrap')
    @include('includes.icons')
</head>
<body class="min-vh-100 d-flex flex-column position-relative">
    @include('layout.navbar')
    <hr>
    <div class="container d-flex justify-content-center shadow mb-5 mt-3" style="height: 600px">
        <div class="h-100 w-25 d-flex flex-column justify-content-between align-items-center rounded-2 ">
            <div class="list-group p-2 w-100">
                <a href="{{ route('account-settings') }}" class="list-group-item">{{ __('account.update-profile') }}</a>
                <a href="{{ route('change-password') }}" class="list-group-item">{{ __('account.change-password') }}</a>
                <a href="{{ route('change-language') }}" class="list-group-item bg-warning">{{ __('account.change-language') }}</a>
            </div>
            @include('layout.logout-button')
        </div>
        <div class="w-75 p-3 rounded-2">
            <h2>{{ __('account.change-language') }}</h2>
            <form action="{{ route('change-language-save') }}" method="POST">
                @csrf
                <div class="form-group d-flex align-items-center p-2 w-50 justify-content-between">
                    <label for="language" class="form-label text-dark me-3">Language</label>
                    <select name="language" id="language" class="form-control w-75">
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                        <option value="id" {{ app()->getLocale() == 'id' ? 'selected' : '' }}>Bahasa Indonesia</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning mt-3">{{ __('account.change-language') }}</button>
            </form>
        </div>
    </div>

    @include('layout.footer')
</body>
</html>