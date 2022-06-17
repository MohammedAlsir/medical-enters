@extends('layouts.app')
@section('checkupes_open','menu-open')
@section('checkupes','active')
@section('checkupes_index','active')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <img src="{{asset('uploads/health_checkup.png')}}" class="image-title-card" alt="health_checkup">

                         كل الفحوصات الطبية
                        </h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الفحص </th>
                                <th> سعر الفحص </th>
                                <th> مدة الفحص </th>
                                <th>  الطبيب </th>
                                <th> المريض  </th>
                                <th>  المعمل </th>
                                <th>  تاريخ الإضافة </th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($checkupes as $checkup)
                            <tr >
                                <td>{{$index++}}</td>
                                <td>{{$checkup->ckeckup_name}}</td>
                                <td>{{$checkup->ckeckup_price}}</td>
                                <td>{{$checkup->ckeckup_time}}</td>
                                <td>{{$checkup->Doctor_Fun_Relation->name}}</td>
                                <td>{{$checkup->patient_id}}</td>
                                <td>{{$checkup->Lab_Fun_Relation->name}}</td>
                                <td>{{$checkup->created_at}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('checkupes.destroy',$checkup->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('checkupes.edit',$checkup->id)}}" class="btn btn-primary">
                                                <span>تعديل</span>
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <button type="button" class="show_confirm  btn btn-danger"></i>&nbsp;
                                                <span>حذف</span>
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
