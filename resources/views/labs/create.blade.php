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
                        <h3 class="card-title">إضافة معمل جديد</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('labs.store')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">اسم المعمل </label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">نوع المعمل </label>
                                <div class="col-sm-10">
                                    <input required type="text" name="type" class="form-control">
                                </div>
                            </div>


                            {{-- <input  type="hidden" name="medical_center_id" value="{{Auth::user()->id}}"> --}}

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-block btn-info">اضافة</button>
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


