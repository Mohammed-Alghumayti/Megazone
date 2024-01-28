@extends('layouts.app')
@section('content')

<script src="assets/Js/counter.js"></script>

<body  onmouseover="incNbr()">

    <div class="main-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="caption header-text">
                        <h6>Welcome to <span style="font-weight: bolder;">megazone</span></h6>
                        <h2>BEST SHOPPING SITE EVER!</h2>
                        <p >"In Megazone, we redefine online shopping, offering curated collections and personalized experiences to help you discover what you want and more."</p>
                        <div class="search-input">

                        </div>
                    </div>
                </div>


                <div id="counter" class="col-lg-6 align-self-center">
                    <div id="vv" class="caption header-text">
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

                <div id="whaitBox" class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <i id="mainIcon" class="bi bi-person-video2"></i>
                            </div>
                            <h4>Personalization
                            </h4>
                        </div>
                    </a>
                </div>

                <div id="whaitBox" class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <i style="margin-top: 25PX;" id="mainIcon" class="fa-solid fa-headset"></i>
                            </div>
                            <h4>24/7 Support
                            </h4>
                        </div>
                    </a>
                </div>

                <div id="whaitBox" class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <i id="mainIcon" class="bi bi-fingerprint"></i>
                            </div>
                            <h4>Secure Transactions
                            </h4>
                        </div>
                    </a>
                </div>

                <div id="whaitBox" class="col-lg-3 col-md-6">
                    <a href="#">
                        <div class="item">
                            <div class="image">
                                <i style="margin-top: 25PX;" id="mainIcon" class="fa-solid fa-tags"></i>
                            </div>
                            <h4>OFFERS & DEALS
                            </h4>
                        </div>
                    </a>
                </div>



            </div>
        </div>
    </div>

    <div id="topcat" class="section most-played">
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
                            <a href="{{route('Toitems',['id'=>$row->id])}}"><img src="assets/images/welcomePage/{{$row['image']}}"alt=""></a>
                        </div>
                        <div class="down-content">
                            <span class="category">رقم المجموعة {{$row['id']}}</span>
                            <h4>{{$row['itemgroupname']}}</h4>
                            <a href="{{route('Toitems',['id'=>$row->id])}}">Explore</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2048 Mohammed Alghumayti. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>




@endsection