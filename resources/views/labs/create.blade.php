@extends('layouts.app')
@section('labs_open','menu-open')
@section('labs','active')
@section('labs_create','active')
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
                        <img src="{{asset('uploads/add_list_64px.png')}}" class="image-title-card" alt="microscope">
                            إضافة معمل جديد
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('labs.store')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body custom-design">

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">اسم المعمل </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text" class="form-control" name="name" placeholder="أدخل إسم المعمل من فضلك">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">نوع المعمل </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text" name="type" class="form-control" placeholder="أدخل نوع المعمل من فضلك">
                                </div>
                            </div>


                            {{-- <input  type="hidden" name="medical_center_id" value="{{Auth::user()->id}}"> --}}

                            <!-- /.card-body -->
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


