@extends('layouts.app')
@section('medical_center_open','menu-open')
@section('medical_center','active')
@section('medical_center_create','active')
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
                        <img src="{{asset('uploads/add_list_64px.png')}}" class="image-title-card" alt="medical-center-add">
                            إضافة مركـز طبي جديد
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('medical_center.store')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body custom-design">

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">اسم المركز </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text"  class="form-control" name="name" placeholder="أدخل اسم المركز من فضلك">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">العنوان </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text" name="address" class="form-control" placeholder="أدخل عنوان المركز من فضلك">
                                </div>
                            </div>

                            <!-- /.card-body -->
                            {{-- <div class="card-footer"> --}}
                            <div class="form-group row">
                                 <div class="col-md-3 col-sm-3 col-xs-4"></div>
                                <button type="submit" class="btn btn-block btn-info col-md-6 col-sm-9 col-xs-8">
                                    <span>إضـــافة</span>
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>
                            <!-- /.card-footer -->
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


