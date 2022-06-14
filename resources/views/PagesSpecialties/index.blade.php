@extends('layouts.app')
@section('specialtie_open','menu-open')
@section('specialties','active')
@section('specialtie_index','active')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <img src="{{asset('uploads/list_64px.png')}}" class="image-title-card" alt="specialite">
                        كل التخصصات الطبية
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم التخصص </th>
                                <th>اسم المركز </th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($specialties as $speciale)
                            <tr >
                                <td>{{$index++}}</td>
                                <td>{{$speciale->specialtie_name}}</td>
                                <td>{{$speciale->MedicalCenter_Fun_Relation->name}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('specialtie.destroy',$speciale->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('specialtie.edit',$speciale->id)}}" class="btn btn-primary">
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
