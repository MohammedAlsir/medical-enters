@extends('layouts.app')
@section('reservation_open','menu-open')
@section('reservations','active')
@section('reservation_create','active')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-11">
                <!-- Horizontal Form -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">
                        <img src="{{asset('uploads/add_list_64px.png')}}" class="image-title-card" alt="reservation">
                            إضافة  حجز جديد
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('reservations.store')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body custom-design">

                            {{-- == Select  Patient  == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label"> إسم المريض  </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                     <select name="patient_id" id="" class="form-control" required>
                                         <option value="" disabled>إختر  أسم المريض من فضلك</option>
                                         <option value="1">ahmed</option>
                                         {{-- @foreach ($medical_centers as $m_c)
                                        <option value="{{$m_c->id}}">{{$m_c->name}}</option>
                                         @endforeach --}}
                                     </select>
                                </div>
                            </div>

                             {{-- == Select Medical Center == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">المركز الطبي  </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                     <select name="medical_center_id" id="" class="form-control" required>
                                         <option value="" selected disabled>إختر المركز الطبي من فضلك</option>
                                         @foreach ($medical_centers as $m_c)
                                        <option value="{{$m_c->id}}">{{$m_c->name}}</option>
                                         @endforeach
                                     </select>
                                </div>
                            </div>

                             {{-- == Select  Doctor == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label"> إسم الطبيب  </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                     <select name="doctor_id" id="" class="form-control" required>
                                         <option value="" disabled>إختر إسم الطبيب من فضلك</option>
                                         @foreach ($doctors as $doctor)
                                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                         @endforeach
                                     </select>
                                </div>
                            </div>

                            {{-- == Submit Botton == --}}
                             <div class="form-group row">
                                 <div class="col-md-3 col-sm-3 col-xs-4"></div>
                                <button type="submit" class="btn btn-block btn-info col-md-6 col-sm-9 col-xs-8">
                                    <span>إضـــافة</span>
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>

                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection


