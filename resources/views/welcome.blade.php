@extends('layouts.app')
@section('content')



<div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="caption header-text">
                    <h6>Welcome to lugx</h6>
                    <h2>BEST GAMING SITE EVER!</h2>
                    <p>LUGX Gaming is free Bootstrap 5 HTML CSS website template for your gaming websites. You can
                        download and
                        use this layout for commercial purposes. Please tell your friends about TemplateMo.</p>
                    <div class="search-input">

                        <div class="col-lg-6 align-self-center section-heading">
                            <a href="{{route('test')}}"><h2>Most Played</h2></a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="features">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="item">
                        <div class="image">
                            <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                        </div>
                        <h4>Free Storage</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="item">
                        <div class="image">
                            <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                        </div>
                        <h4>Free Storage</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="item">
                        <div class="image">
                            <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                        </div>
                        <h4>Free Storage</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="item">
                        <div class="image">
                            <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                        </div>
                        <h4>Free Storage</h4>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>




@endsection