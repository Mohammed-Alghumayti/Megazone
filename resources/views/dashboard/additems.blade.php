@extends('layouts.dashboard')
@section('content')


<div class="container text-center">

    <h1 class="mb-5">
        <div class=" alert alert-success">
            <strong>اضافة منتج</strong>
        </div>
    </h1>

    <div style="font-size: 15px; font-family: Cairo; font-weight: bold;" class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <form class="row g-3" action="{{route('savegitems')}}" method="post">
                    @csrf
                    <div class="col-md-8">
                        <label for="itemname" class="form-label">اسم العنصر</label>
                        <input type="text" class="form-control" id="itemname" name="itemname">
                        <p class="alert-danger"> @error("itemname")
                            {{ "Please fill Item name" }}
                            @enderror</p>
                    </div>

                    <div class="col-md-4">
                        <label for="price" class="form-label">السعر</label>
                        <input type="number" class="form-control" id="price" name="price">
                        <p class="alert-danger"> @error("price")
                            {{ "Please fill Item price" }}
                            @enderror</p>
                    </div>

                    <div class="col-md-2">
                        <label for="color" class="form-label">اللون</label>
                        <input type="color" class="form-control" id="color" name="color">
                    </div>

                    <div class="col-md-3">
                        <label for="qty" class="form-label">الكمية</label>
                        <input type="number" class="form-control" id="qty" name="qty">
                        <p class="alert-danger"> @error("qty")
                            {{ "Please fill Item Quantity" }}
                            @enderror</p>
                    </div>

                    <div class="col-md-7">
                        <label for="itemgroupno" class="form-label">رقم المجموعة</label>
                        <select id="itemgroupno" class="form-select" name="itemgroupno">
                            @if(isset($groupnameskey))
                            @foreach($groupnameskey as $row)
                            <option>{{$row['id']}}</option>
                            @endforeach
                            @else
                            <option selected>No data yet</option>
                            @endif
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">ارفق صورة المنتج</label>
                        <input class="form-control" type="file" name="image" id="image">
                        <p class="alert-danger"> @error("image")
                            {{ "Please select an Image" }}
                            @enderror</p>
                    </div>

                    <div class="mt-5 text-center col-sm-12">
                        <button type="submit" class=" btn btn-primary">حفظ</button>
                    </div>
                </form>

            </div>
        </div>

    </div>

</div>


@endsection