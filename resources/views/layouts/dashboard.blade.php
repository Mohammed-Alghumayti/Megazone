<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Font Awsoem Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- othe css files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/mainPage.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        * {
            font-family: Cairo;
        }
    </style>

</head>


<body dir="rtl">
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-dark" style=" font-size: 17px;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link active text-light" aria-current="page"
                                href="{{route('home')}}">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">مجموعة العناصر</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="">العناصر</a>
                        </li>
                    </ul>
                </div>

                @if (!Auth::check())
                <div> <!-- login - logout -->
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="{{route('login')}}">Login1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Register</a>
                        </li>
                    </ul>
                </div>

                @else
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="{{route('logout')}}">Logout</a>
                    </li>
                </ul>

                @endif

            </div>
        </nav>

        <main class="py-0">
            <div class="">
                <div class="row">
                    <div class="col-sm-2">
                        <div class=" px-5 bg-dark">
                            <div
                                class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                <ul class="mt-3 nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                                    id="menu">
        
                                    <li class="nav-item mt-5 mb-5" style="background-color: bisque; border-radius: 20px;">
                                        <a href="#" class="p-3  nav-link align-middle px-3">
                                            <i class="fs-3 bi-boombox"></i> <span style="font-size: 20px; font-weight: bold;"
                                                class="ms-0 d-none d-sm-inline text-dark">&nbsp;المنتجات</span>
                                        </a>
                                    </li>
        
                                    <li class="nav-item mb-5" style="background-color: bisque; border-radius: 20px;">
                                        <a href="#" class="p-3  nav-link align-middle px-3">
                                            <i class="fs-3 bi-boxes"></i> <span style="font-size: 20px; font-weight: bold;"
                                                class="ms-0 d-none d-sm-inline text-dark">&nbsp;المجموعات</span>
                                        </a>
                                    </li>
        
                                    <li class="nav-item mb-5" style="background-color: bisque; border-radius: 20px;">
                                        <a href="#" class="p-3  nav-link align-middle px-3">
                                            <i class="fs-3 bi-boombox"></i> <span style="font-size: 20px; font-weight: bold;"
                                                class="ms-0 d-none d-sm-inline text-dark">&nbsp;المنتجات</span>
                                        </a>
                                    </li>
        
        
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 mt-3  d-flex justify-content-center">
                        @yield('content')
                    </div>
                </div>
               
            </div>
          
          </main>

    </div>
</body>

</html>