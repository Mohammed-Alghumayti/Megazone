@extends('layouts.app')
@section('content')

<script src="assets/Js/counter.js"></script>
<style>
    #gg,#gg1 {
        opacity : 0; transition:opacity 1s
    }
    #nbr {
        opacity : 0; transition:opacity 1s
    }

</style>

<body onmouseover="incNbr()">

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

                        </div>
                    </div>
                </div>


                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <p id="nbr" style="margin-top: -100px; margin-left: 300px; font-size: 90px; font-weight: bolder;">100
                        </p>
                        <p  id="gg" 
                            style="margin-top: -100px; margin-left: 460px; font-size: 90px; font-weight: bolder;">%</p>

                        <h6 id="gg1" 
                            style="margin-top: -40px; margin-left: 310px; font-style: italic; font-weight: bold;">Secure
                            website</h6>

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

    <div class="section most-played">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="section-heading">
                        <h6>TOP CATEGORY</h6>
                        <h2>Most Buy</h2>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="main-button">
                        <a href="shop.html">View All</a>
                    </div>
                </div>
                @foreach($groupnameskey as $row)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="{{route('Toitems')}}"><img src="assets/images/welcomePage/banner-bg1.png"
                                    alt=""></a>
                        </div>
                        <div class="down-content">
                            <span class="category">رقم المجموعة {{$row['id']}}</span>
                            <h4>{{$row['itemgroupname']}}</h4>
                            <a href="product-details.html">Explore</a>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>
    </div>

    <label class="trigger">
        <input type="checkbox" class="checkbox checkbox--red" /> Show additional information
        <span class="msg">
            Hey there, I'm fading in/out with pure CSS. How cool is that?!
        </span>
    </label>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2048 Mohammed Alghumayti. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>




@endsection