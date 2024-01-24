@extends('layouts.dashboard')
@section('content')

<div class="container text-center">

    <h1 class="mb-5">
        <div class=" alert alert-success">
            <strong>بيانات المجموعات</strong>
        </div>
    </h1>

    <div class=" card">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-4">
                            <form action="{{route('savegroups')}}" method="post">
                                @csrf
                                <label for="itemgroupname" class="p-3"
                                    style="font-family: Cairo; font-weight: 600; font-size: 20px;">ادخل اسم المجموعة</label>
                                <input type="text" class="form-control form-control-sm " name="itemgroupname"
                                    id="itemgroupname" required>
                                <div class="row">

                                    <div class="text-center mt-3">
                                        <button class="btn btn-primary mt-2" type="submit" onclick="cc()">حفظ</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="mt-5 col-sm-12 card">
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
                        <td><a href="{{route('delg',['x'=>$row->id])}}"><i class="bi bi-trash text-danger"></i></a></td>
                        <td><a href="{{route('editg',['x'=>$row->id])}}"><i class="bi bi-pencil-square text-success"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
                @endif
            </table>
        </div>
    </div>




</div>

<script>
    function cc() {

        Swal.fire({
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>
@endsection