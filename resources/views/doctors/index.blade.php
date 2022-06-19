@extends('layouts.app')
@section('doctors_open','menu-open')
@section('doctors','active')
@section('doctors_index','active')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <img src="{{asset('uploads/medical_doctor.png')}}" class="image-title-card" alt="medical_doctor">
                         كل  الاطباء
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الطبيب </th>
                                <th>المركز الطبي</th>
                                <th>التخصص</th>
                                <th>رقم الهاتف </th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->Medical->name}}</td>
                                <td>{{$item->Specialtie->specialtie_name}}</td>
                                <td>{{$item->phone}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('doctors.destroy',$item->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('doctors.edit',$item->id)}}" class="btn btn-primary">
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
