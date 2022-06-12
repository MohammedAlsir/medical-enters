@extends('layouts.app')
@section('labs_open','menu-open')
@section('labs','active')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-11">
                <!-- Horizontal Form -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">تعديل بيانات المعمل</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('labs.update',$item->id)}}" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">اسم المعمل </label>
                                <div class="col-sm-10">
                                    <input required type="text" value="{{$item->name}}" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">نوع المعمل </label>
                                <div class="col-sm-10">
                                    <input required type="text" value="{{$item->type}}" name="type" class="form-control">
                                </div>
                            </div>

                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-block btn-info">تعديل</button>
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


