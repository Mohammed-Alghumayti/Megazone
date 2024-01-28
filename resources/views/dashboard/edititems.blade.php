@extends('layouts.dashboard')
@section('content')

<div style="font-size: 15px; font-family: Cairo; font-weight: bold;" class="container">

    <h3 class="alert alert-warning">تعديل بيانات المنتج</h3>


    <div class="card">
        <div class="card-body">
            <form class="row g-3" action="{{route ('updateitem')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="itemname" class="form-label">اسم العنصر</label>
                    <input type="text" class="form-control" id="itemname" name="itemname"
                        value="{{$edititemkey -> itemname}}">
                </div>
                <div class="col-md-5">
                    <label for="price" class="form-label">السعر</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{$edititemkey -> price}}">
                </div>
                <div class="col-md-5">
                    <label for="qty" class="form-label">الكمية</label>
                    <input type="number" class="form-control" id="qty" name="qty" value="{{$edititemkey -> qty}}">
                </div>
                <div class="col-md-2">
                    <label for="color" class="form-label">اللون</label>
                    <input type="color" class="form-control" id="color" name="color" value="{{$edititemkey -> color}}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">ارفق صورة المنتج</label>
                    <input class="form-control" type="file" name="image" id="image" value="{{$edititemkey -> image}}">
                </div>
                <div class="col-md-12">
                    <label for="itemgroupno" class="form-label">رقم المجموعة</label>
                    <select id="itemgroupno" class="form-select" name="itemgroupno"
                        value="{{$edititemkey -> itemgroupno}}">

                        @if(isset($itemgroupkey))
                        @foreach($itemgroupkey as $row)
                        <option>{{$row['id']}}</option>
                        @endforeach
                        @else
                        <option>No data yet</option>
                        @endif
                    </select>
                </div>

                <div class="mt-5 text-center col-sm-12">
                    <button type="submit" class=" btn btn-primary">حفظ</button>
                </div>

                <input type="text" name="id" value="{{$edititemkey -> id}}" hidden>
            </form>

        </div>
    </div>

</div>

@endsection