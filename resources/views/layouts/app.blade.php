<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- othe css files -->
    <link rel="stylesheet" href={{asset("assets/css/mainPage.css")}}>
    <link rel="stylesheet" href={{asset("assets/css/bootstrap.min.css")}}>

    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body onload="">
    <div id="app">
        <header class="header-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <!-- ***** Logo Start ***** -->
                            <a href="{{route('home')}}" class="logo">
                                <img src="{{asset("assets/images/mega-white.png")}}" alt="" style="width: 210px; margin-top: -40px;">
                            </a>
                            <!-- ***** Logo End ***** -->
                            <!-- ***** Menu Start ***** -->
                        

                            <ul  class="   nav">
                                
                                <li><a href="{{route('home')}}" class="active">Home</a></li>
                                <li><a href="">Our Shop</a></li>
                                <li><a href="{{route('home')}}#topcat">Categories</a></li>

                                @if (!Auth::check())
                                <li ><a href="{{route('login')}}">Login</a></li>
                                <li><a style="background-color: #ee626b;"  href="{{route('register')}}">Sign In</a></li>

                                @else
                                <li ><a style="background-color: #ee626b;" href="{{route('logout')}}">Logout</a></li>
                                @endif
                                <li ><a  href="{{route('checkout')}}" class="bg-info rounded-pill text-light "> <i style="font-size: 17px;" class="bi bi-cart4"></i>
                                    <span class="badge">{{Session::get('countcart')}}</span></a></li>

                                
                            </ul>
                            

                          

                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                        

                    </div>
                </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>