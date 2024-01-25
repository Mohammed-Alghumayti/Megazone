@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="text-center ">

        <h1 class="mb-5">
            <div class=" alert alert-success">
                <strong>بيانات المنتجات</strong>
            </div>
        </h1>

        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="font-weight: bolder;">رقم العنصر</th>
                            <th style="font-weight: bolder;">اسم العنصر</th>
                            <th style="font-weight: bolder;">سعر العنصر</th>
                            <th style="font-weight: bolder;">الكمية</th>
                            <th style="font-weight: bolder;">لون العنصر</th>
                            <th style="font-weight: bolder;">الصورة</th>
                            <th style="font-weight: bolder;">رقم المجموعة</th>
                            <th style="font-weight: bolder;">حذف</th>
                            <th style="font-weight: bolder;">تعديل</th>
                        </tr>
                    </thead>
                    @if(isset($itmeskey))
                    <tbody>
                        @foreach($itmeskey as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['itemname']}}</td>
                            <td>{{$row['price']}}</td>
                            <td>{{$row['qty']}}</td>
                            <td>{{$row['color']}}</td>
                            <td>{{$row['image']}}</td>
                            <td>{{$row['itemgroupno']}}</td>
                            <td><a href="{{route('delitem',['x'=>$row->id])}}"><i class="bi bi-trash text-danger"></i></a></td>
                            <td><a href="{{route('edititem',['x'=>$row->id])}}"><i class="bi bi-pencil-square text-success"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
            </div>
        </div>

    </div>
</div>

@endsection