@extends('layouts.app')
@section('reservation_open','menu-open')
@section('reservations','active')
@section('reservation_index','active')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <img src="{{asset('uploads/reservation.png')}}" class="image-title-card" alt="reservation">
                        كل الحجوزات
                     </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>المريض   </th>
                                <th> الطبيب  </th>
                                <th> المركز الطبي  </th>
                                <th>  تاريخ الإضافة </th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                            <tr >
                                <td>{{$index++}}</td>
                                <td>{{$reservation->patient_id}}</td>
                                <td>{{$reservation->Doctor_Fun_Relation->name}}</td>
                                <td>{{$reservation->MedicalCenter_Fun_Relation->name}}</td>
                                <td>{{$reservation->created_at}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('reservations.destroy',$reservation->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('reservations.edit',$reservation->id)}}" class="btn btn-primary">
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
