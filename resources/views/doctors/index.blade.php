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
                    <h3 class="card-title"> كل  الاطباء</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الطبيب </th>
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
                                <td>{{$item->type}}</td>
                                <td>{{$item->phone}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('doctors.destroy',$item->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('doctors.edit',$item->id)}}" class="btn btn-primary">
                                                تعديل</a>
                                            <button type="button" class="show_confirm  btn btn-danger"></i>&nbsp;
                                                حذف</button>
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
