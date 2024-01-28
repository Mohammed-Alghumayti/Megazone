@extends('layouts.app')
@section('content')

<div class="main-banner">
  <div class="container">
    <div class="row">
      @foreach($groupnameskey as $row)

      <div class="container text-center">
        <h1 style="font-size: 45px; font-weight: bolder; width: auto; border: solid 2px rgb(235, 213, 213);"
          class="mb-3 badge bg-info rounded-pill  text-light">{{$row['itemgroupname']}}</h1>
      </div>

      <div class="section most-played">
        <div class="container">
          <div class="row">
            @foreach ($itemskey as $row)
            @if($row['qty'] <= 0)
             <div style="padding-left: 50px;" class="col-lg-3 col-md-6 col-sm-6">
              <div class="item">
                <div class="thumb">
                  <a href=""><img style="padding: 30px; filter: grayscale(100%); cursor: not-allowed;" src="{{ asset('storage/' . $row->image) }}" alt=""></a>
                </div>
                <div class="down-content">
                  <span class="category">{{$row['price']}} SAR</span>
                  <h4>{{$row['itemname']}}</h4>
                  <a style="filter: grayscale(100%); cursor: not-allowed;" class="col-sm-8" href=""><span>Out of
                      stock</span></a>
                </div>
              </div>
          </div>

          @else
          <div style="padding-left: 50px;" class="col-lg-3 col-md-6 col-sm-6">
            <div class="item">
              <div class="thumb">
                <a href="{{route('addtocart',['id'=>$row->id])}}"><img style="padding: 30px;" src="{{ asset('storage/' . $row->image) }}" alt=""></a>
              </div>
              <div class="down-content">
                <span class="category">{{$row['price']}} SAR</span>
                <h4>{{$row['itemname']}}</h4>
                <a class="col-sm-8" href="{{route('addtocart',['id'=>$row->id])}}"><span>Add Cart</span></a>
              </div>
            </div>
          </div>
          @endif
          @endforeach

        </div>
      </div>
    </div>

  </div>
  @endforeach
</div>
</div>

<footer>
  <div class="container ">
    <div class=" col-lg-12">
      <p>Copyright © 2048 Mohammed Alghumayti. All rights reserved.</p>
    </div>
  </div>
</footer>
</body>

@endsection