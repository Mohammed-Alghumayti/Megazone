@extends('layouts.dashboard')
@section('content')
<div class="container">
    <div class="row text-center ">

        <h1 class="mb-5">
            <div class=" alert alert-success">
                <strong>بيانات المجموعات</strong>
            </div>
        </h1>

        <div class="container col-sm-11 card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="font-weight: bolder;">رقم المجموعة</th>
                            <th style="font-weight: bolder;">اسم المجموعة</th>
                            <th style="font-weight: bolder;">حذف</th>
                            <th style="font-weight: bolder;">تعديل</th>
                        </tr>
                    </thead>
                    @if(isset($groupnameskey))
                    <tbody>
                        @foreach($groupnameskey as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['itemgroupname']}}</td>
                            <td><a href=""><i class="bi bi-trash text-danger"></i></a></td>
                            <td><a href=""><i class="bi bi-pencil-square text-success"></i></a></td>
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