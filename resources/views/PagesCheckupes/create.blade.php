@extends('layouts.app')
@section('checkupes_open','menu-open')
@section('checkupes','active')
@section('checkupes_create','active')
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
                            <img src="{{asset('uploads/health_checkup.png')}}" class="image-title-card"
                                alt="health_checkup">
                            إضافة فحص جديد
                        </h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form method="POST" action="{{route('checkupes.store')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body custom-design">

                            {{-- == Input check Up Name == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">اسم الفحص </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text" class="form-control"
                                        placeholder="أدخل اسم الفحص من فضلك" name="ckeckup_name">
                                </div>
                            </div>

                            {{-- == Input  Check Up Price == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4  control-label">سعر الفحص </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text" class="form-control"
                                        placeholder="أدخل  سعر الفحص من فضلك" name="ckeckup_price">
                                </div>
                            </div>

                            {{-- == Input Check Up Time  == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label"> مدة الفحص </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text" class="form-control"
                                        placeholder="أدخل  مدة الفحص من فضلك" name="ckeckup_time">
                                </div>
                            </div>

                            {{-- == Select  patient  == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label"> إسم المريض </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select name="patient_id" id="" class="form-control" required>
                                        <option value="" disabled>إختر إسم المريض من فضلك</option>

                                        <option value="1">عبد الله</option>
                                        {{-- @foreach ($medical_centers as $m_c)
                                        <option value="{{$m_c->id}}">{{$m_c->name}}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>

                            {{-- == Select Lad  == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label"> إسم المعمل </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select name="lab_id" id="" class="form-control" required>
                                        <option value="" disabled>إختر إسم المعمل من فضلك</option>
                                        @foreach ($labs as $lab)
                                        <option value="{{$lab->id}}">{{$lab->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- == Select Doctor  == --}}
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label"> إسم الطبيب </label>
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
                            <div class="form-group row ">
                                <div class="col-md-3 col-sm-3 col-xs-4"></div>
                                <button type="submit"
                                    class="btn btn-block btn-info col-md-6 col-sm-9 col-xs-8">
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
