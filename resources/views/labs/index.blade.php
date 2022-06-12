@extends('layouts.app')
@section('labs_open','menu-open')
@section('labs','active')
@section('labs_index','active')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> كل  المعامل</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم المعمل </th>
                                <th>نوع المعمل </th>
                                {{-- <th>المركز الصحي </th> --}}
                                {{-- <th>ينتمي لقسم </th> --}}
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->type}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('labs.destroy',$item->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('labs.edit',$item->id)}}" class="btn btn-primary">
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
