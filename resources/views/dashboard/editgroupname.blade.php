@extends('layouts.dashboard')
@section('content')


<div class="container">
    <div class="row ">
        <h3 class="alert alert-warning">تعديل بيانات المجموعة</h3>
        <div class="col">
            <div class="card ">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{route('updateg')}}" method="post">
                        @csrf
                        <label for="itemgroupname" class="p-3" style="font-family: Cairo; font-weight: 600; font-size: 20px;">ادخل اسم المجموعة الجديد</label>
                        <input type="text" class="form-control form-control-sm-6 " value="{{$editgroupkey -> itemgroupname}}" name="itemgroupname" id="itemgroupname"required>
                        
                        <div class="row">
                            <input type="text" name="id" value="{{$editgroupkey -> id}}" hidden>

                            <div class="text-center mt-3">
                                <button class="btn btn-primary mt-2" type="submit">حفظ</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection