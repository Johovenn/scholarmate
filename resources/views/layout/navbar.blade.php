<nav class="d-flex px-5 mt-3 justify-content-between align-items-center w-100">
    <div class="d-flex align-items-center justify-content-center">
        <img src="{{ asset('assets/scholarmate.png') }}" width="100px" alt="">
        <ul class="d-flex mt-3" style="list-style: none;">
            <li class="mx-2"><a href="{{ route('home') }}" class="navbar-link text-decoration-none">Home</a></li>
            <li class="mx-2 dropdown">
                <a href="" class="dropdown-toggle text-decoration-none navbar-link d-flex align-items-center" role="button" data-bs-toggle="dropdown">{{ __('home.navbar-scholarships') }}</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('beasiswa-sd') }}" class="dropdown-item">{{ __('home.scholarships-sd') }}</a></li>
                    <li><a href="{{ route('beasiswa-smp') }}" class="dropdown-item">{{ __('home.scholarships-smp') }}</a></li>
                    <li><a href="{{ route('beasiswa-sma') }}" class="dropdown-item">{{ __('home.scholarships-sma') }}</a></li>
                    <li><a href="{{ route('beasiswa-kuliah') }}" class="dropdown-item">{{ __('home.scholarships-kuliah') }}</a></li>
                </ul>
            </li>
            <li class="mx-2"><a href="{{ route('about') }}" class="navbar-link text-decoration-none">{{ __('home.navbar-about') }}</a></li>
        </ul>
    </div>
    <div class="d-flex align-items-center">
        <div class="me-3">
            <form class="d-flex" role="search" method="GET" action="{{ route('search') }}">
                <input class="form-control me-2" name="search" id="search" type="search" placeholder="{{ __('home.navbar-searchPlaceholder') }}" aria-label="Search" width="800px">
                <button class="btn btn-warning" type="submit">{{ __('home.navbar-search') }}</button>
            </form>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                <ion-icon name="person-circle-outline" size='large'></ion-icon>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li class="dropdown-item"><a class="text-decoration-none text-dark d-flex align-items-center" href="{{ route('account-settings') }}"><ion-icon name="settings-outline" class="me-2"></ion-icon>{{ __('home.navbar-accountSettings') }}</a></li>
                {{-- <li class="dropdown-item"><a class="text-decoration-none text-dark d-flex align-items-center" href=""><ion-icon name="language-outline" class="me-2"></ion-icon>Language</a></li> --}}
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar-link:hover{
        color:rgb(255, 174, 0);
        transition: 0.3s;
    }

    .navbar-link{
        color: black;
        transition: 0.2s;
    }
</style>