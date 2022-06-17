@extends('layouts.app')
{{-- @section('title','كل المراكز الطبية') --}}
@section('medical_center_open','menu-open')
@section('medical_center','active')
@section('medical_center_index','active')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    <img src="{{asset('uploads/location.png')}}" class="image-title-card" alt="medical-center-location">
                         كل المراكز الطبية
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table  table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم المركز </th>
                                <th>العنوان </th>
                                {{-- <th>ينتمي لقسم </th> --}}
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('medical_center.destroy',$item->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('medical_center.edit',$item->id)}}" class="btn btn-primary">
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
